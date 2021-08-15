<?php

print_r($_POST);

print_r($_POST['textarea']);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
      
      <style type="text/css">
        
      </style>
  </head>
  <body>
    
      <div class="container">
          
          <h1>Get in touch!</h1>
          
          <form class="form-control" method="post">
              
            <div class="mb-3">
                
              <label for="email" class="form-label">Email address</label>
                
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                
            </div>
              
            <div class="mb-3">
                
              <label for="subject" class="form-label">Subject</label>
                
              <input type="text" class="form-control" name="subject" id="subject">
                
            </div>
              
            <div class="mb-3">
                
              <label for="textarea" name="textarea" class="form-label">What would you like to ask us</label>
                
              <textarea class="form-control" id="textarea" rows="3"></textarea>
                
            </div>
              
            <div class="mb-3">
                
                <input type="submit" class="btn btn-primary" value="submit">
                
              </div>
              
          </form>

      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>