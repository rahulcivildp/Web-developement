<?php

$error = "";

$successmsg = "";
    
if ($_POST) {
        
    if (!$_POST["email"]) {

        $error .= "Empty email address.<br>";
    }

    if (!$_POST["subject"]) {

        $error .= "Empty subject line.<br>";
    }

    if (!$_POST["textarea"]) {

        $error .= "Empty comment section.<br>";
    }

    if ($_POST["email"] != "" && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

        $error .= "Invalid email format<br>";

    }

    if ($error !="") {

        $error = '<div class="alert alert-danger" role="alert"><strong>The content field is required</strong><p>'. $error .'</p></div>';

    }
    
    else {
        
        $emailTo = "rahulcivildp@gmail.com";

        $subject = $_POST['subject'];

        $body = $_POST['textarea'];

        $header = "From: ".$_POST['email'].value;

        if (mail($emailTo, $subject, $body, $header)) {

            $successmsg = '<div class="alert alert-success" role="alert"><strong>Your attempt is successful</strong></div>';

        }else {
        
            $error = '<div class="alert alert-danger" role="alert"><strong>Your email wasn\'t send</strong></div>';
        
        } 
        
    }
    
    
}


    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="http://fiction-world.com/fiction-world/6-PHP/jquery-3.6.0.min.js"></script>
    <script src="http://fiction-world.com/fiction-world/6-PHP/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link href="http://fiction-world.com/fiction-world/6-PHP/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet"> 
      
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Subscription!</title>
      
      <style type="text/css">
            #submit:hover {
                background-color: darkgrey;
            }
      </style>
  </head>
  <body>
    
      <div class="container">
         
        <h1>Get in touch!</h1>

        <div id="successMsg"></div>
            
        <div id="errorMsg"><?php echo $error.$successmsg; ?></div>

        <form class="form-control" method="post">

            <div class="mb-3">

                <label for="email" class="form-label">Email address</label>

                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                
                <small>We'll never share your information with anyone else.</small>

            </div>

            <div class="mb-3">

                <label for="subject" class="form-label">Subject</label>

                <input type="text" class="form-control" name="subject" id="subject">

            </div>

            <div class="mb-3">

                <label for="textarea" class="form-label">What would you like to ask us?</label>

                <textarea class="form-control" name="textarea" id="textarea" rows="3"></textarea>

            </div>

            <div class="mb-3">

                <input type="submit" id="submit" class="btn btn-primary" value="submit">

            </div>

      </form>

      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      
    <script type="text/javascript">
        
           function isEmail(email) {
                  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                  return regex.test(email);
                }
                
            $("form").submit(function(e){
                
                e.preventDefault();
                
                var errorMsg = "";
                
                if ($("#email").val() == "") {
                    
                    errorMsg += "<br>Email address!";
                    
                }
                
                if ($("#subject").val() == "") {
                    
                    errorMsg += "<br>Subject!";
                    
                }
                
                if ($("#textarea").val() == "") {
                    
                    errorMsg += "<br>Textarea!";
                    
                }
                
                if (errorMsg != ""){
                    
                    $("#errorMsg").html('<div class="alert alert-danger" role="alert"><strong>The content field is required</strong>' + errorMsg + '</div>');
                    
                    return false;
                    
                }else {
                    
                    $("form").unbind("submit").submit();
                    
                    return true;
                    
                }
            })
    
    </script>

    

    <!-- Option 2: Separate Popperand Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

