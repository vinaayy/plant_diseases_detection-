<?php

session_start();

include('./db.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $crop = $_POST['crop'];
    $qut = $_POST['qun'];
    $amt = $_POST['amt'];

    $qun = "$qut Quintal";
    $amt = "$amt per Quintal";

    $sql = "INSERT INTO `vendor`(`name`, `phone`, `crop`, `quantity`, `amount`) VALUES ('$name','$phone','$crop','$qun','$amt')";

    $run = mysqli_query($con,$sql);

    if($run)
    {
      ?>
        <script>
          alert("Data Added Successfully!");
          location.replace("./module3.php");
        </script>
      <?php
    }
    else
    {
      ?>
        <script>
          alert("Server Error!");
        </script>
      <?php
    }
    

}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .bgimage{
      background-image: url("farmer.jpg");
      height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
    </style>
    <title>Vendor</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Crop Solution</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item" style="float:right!important;">
                <a class="nav-link active" href="./">Logout</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>
        <div class="bgimage">
        <form action="" method="post">

        <div class="container">
            <label for="uname"><b>Name</b></label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>

            <label for="psw"><b>Mobile Number</b></label>
            <input type="text" class="form-control" placeholder="Enter Mobile Number" name="phone" required>

            <label for="psw"><b>Crop</b></label>
            <input type="text" class="form-control" placeholder="Enter Crop Name" name="crop" required>

            <label for="psw"><b>Quantity</b></label>
            <input type="text" class="form-control" placeholder="Enter Quantity in Quintal" name="qun" required>

            <label for="psw"><b>Amount</b></label>
            <input type="text" class="form-control" placeholder="Enter Amount in RS" name="amt" required>
            
            <div class="m-3 container">
            <button type="submit" class="btn btn-info " name="submit">Add Data</button>
            </div>
            
        </div>
        </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>