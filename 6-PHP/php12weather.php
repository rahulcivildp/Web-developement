<?php



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
          .backgrou {
              margin: 0;
              padding: 0;
          }
          #searchBox {
              margin: 0 35%;
              margin-bottom: 20px;
              width: 30%;
          }
          .migrate {
              position: relative;
              top: 150px;
          }
      </style>
      
  </head>
  <body>
    
    
      <div class="container-fluid backgrou">
          
          
          <div class="bg-image p-5 text-center shadow-1-strong text-white rounded mb-5" id="container" style="background-image: url('https://images.unsplash.com/photo-1552083375-1447ce886485?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'); background-size: 100% 100%; height: 650px;" alt="Responsive image">
            
          <h1 class="display-4 text-black migrate"><strong>What's The Weather?</strong></h1>
          
          <p class="migrate">Please enter a city name.</p>
              
            <input class="form-control col-sm-3 migrate" id="searchBox" style="float: left; border-radius: 5px; border: 1px solid grey;" type="email" placeholder="Enter city name!">
              
            <input type="submit" class="btn btn-primary migrate" id="button" href="#" role="button" value="Submit">
            
          
            <br>
            <br>
        </div>
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