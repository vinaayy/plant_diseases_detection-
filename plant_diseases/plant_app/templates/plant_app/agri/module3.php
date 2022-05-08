<?php 

session_start();

include ('./db.php');

$sql = "SELECT * FROM `farmers` WHERE 1";
$sql1 = "SELECT * FROM `vendor` WHERE 1";

$run = mysqli_query($con,$sql);
$run1 = mysqli_query($con,$sql1);

$data = mysqli_fetch_array($run);

$data1 = mysqli_fetch_array($run1);




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Module3</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Agri Solution</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item" style="float:right!important;">
                <a class="nav-link active" href="./farmer.php">Farmer</a>
                </li>
                <li class="nav-item" style="float:right!important;">
                <a class="nav-link active" href="./vendor.php">Vendor</a>
                </li>
                <li class="nav-item" style="float:right!important;">
                <a class="nav-link active" href="./">Logout</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    <div class="bgimage pt-5">

    <h1>Farmer List:-</h1>

    <table class="table table-success table-striped ">
    <tr>
       <thead>
         <th>Serial No</th>
        <th>Farmer Name</th>
        <th>Mobile Number</th>
        <th>Crop</th>
        <th>Quantity</th>
        <th>Amount</th>
        </thead>
        <tbody>
           <?php
                $count=0;
                while($data = mysqli_fetch_array($run)){
                $count++;
            ?>
            <tr>
                <th><?php echo $count; ?></th>
                <th><?php echo $data['name']; ?></th>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['crop']; ?></td>
                <td><?php echo $data['quantity']; ?></td>
                <td><?php echo $data['amount']; ?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </tr>
    </table>

    <h1>Vendor List:-</h1>

    <table class="table table-success table-striped">
    <tr>
       <thead>
         <th>Serial No</th>
        <th>Vendor Name</th>
        <th>Mobile Number</th>
        <th>Need to Crop</th>
        <th>Need Quantity</th>
        <th>Need Amount</th>
        </thead>
        <tbody>
           <?php
                $count=0;
                while($data1 = mysqli_fetch_array($run1)){
                $count++;
            ?>
            <tr>
                <th><?php echo $count; ?></th>
                <th><?php echo $data1['name']; ?></th>
                <td><?php echo $data1['phone']; ?></td>
                <td><?php echo $data1['crop']; ?></td>
                <td><?php echo $data1['quantity']; ?></td>
                <td><?php echo $data1['amount']; ?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </tr>
    </table>


            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>