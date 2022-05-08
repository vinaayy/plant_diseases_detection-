<?php

SESSION_START();

?>
<!doctype html>
<html lang="en">
  <head>

  <style>
    
body {font-family: Arial, Helvetica, sans-serif;
      background-color:lightgreen}
      
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.bgimage{
      background-image: linear-gradient(rgba(0,0,0,0.527),rgba(0,0,0,0.5)),url("bg.jpg");
      height: 600px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-top:0%;
  background-attachment:fixed;
    }
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>CROP Solution</title>
<?php


?>


  </head>
  <body style="background-color:lightgreen">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">CROP Solution</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item" style="float:right!important;">
                <a class="nav-link active" href="./afterlogin.php">Home</a>
                </li>
                <li class="nav-item" style="float:right!important;">
                <a class="nav-link active" href="./">Logout</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>
        <div class="bgimage">
        <h1 style="color:white;margin-left:70px;">Welcome <?php echo $_SESSION['name'];?></h1>

       
        <div class="container">
          <div class="row container">

          <div class="col-3 font-weight-bold border-dark rounded" style="border:1px solid black;padding:15px;margin:5px; width:32%;background-color: white;">
          <img src="https://i.ibb.co/tq82wfB/Pics-Art-04-11-12-17-05.png" alt="" border="0"   style="width: 100%;">
            
            <div class="container col-12">
            <a href="./module1.php"><button class="btn btn-block bg-success text-light">Crop Suggestion For Your State</button></a>
          </div>
          </div>

          <div class="col-3 font-weight-bold border-dark rounded" style="border:1px solid black;padding:15px;margin:5px;width:32%;background-color: white;">
          <img src="https://i.ibb.co/8YZ2t7M/Pics-Art-03-03-04-18-10.png" alt="Pics-Art-03-03-04-18-10" border="0" style="width: 100%;">
            
            <div class="container col-12">
            <a href="http://127.0.0.1:8000/"><button class="btn btn-block bg-success text-light">Disease Detection</button></a>
          </div>
          </div>

          <div class="col-3 font-weight-bold border-dark rounded" style="border:1px solid black;padding:15px;margin:5px;width:32%;background-color: white;">
          <img src="https://i.ibb.co/x13t62r/Pics-Art-03-03-04-20-59.png" alt="Pics-Art-03-03-04-20-59" border="0" style="width: 100%;">
            
            <div class="container col-12">
            <a href="./module3.php"><button class="btn btn-block bg-success text-light">Online Market</button></a>
          </div>
          </div>

          </div>
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
