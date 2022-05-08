<?php 

session_start();

include ('./db.php');

$sql = "SELECT * FROM `farmers` WHERE 1";
$sql1 = "SELECT * FROM `vendor` WHERE 1";

$run = mysqli_query($con,$sql);
$run1 = mysqli_query($con,$sql1);

//$data = mysqli_fetch_array($run);

//$data1 = mysqli_fetch_array($run1);




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
    

    
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Module3</title>
  </head>
  <body style="
      background-image: linear-gradient(rgba(0,0,0,0.527),rgba(0,0,0,0.5)),url('https://i.ibb.co/DCVrXwk/bg.webp');
      height: 0px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-top:0%;
  background-attachment:fixed;
 ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">CROP Solution</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/agri/agri/Plant-Diseases-Recognition/plant_diseases/plant_app/templates/plant_app/afterlogin.php">Home</a>
              </li>
              
              <?php if($_SESSION['type']=='farmer') { ?>
                
                <?php } ?>
                <li class="nav-item" style="float:right!important;">
                <a class="nav-link active" href="./">Logout</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    <div class="bgimage">
    <?php if($_SESSION['type']=='vendor') { ?>

      <header style="background:none">
          <h1 style="
            color:white;text-align:center;
            font-size: 400%;
          "><strong>Buy Fresh Crops</h1>
            
      </header>
    <h1 style="color:white ; margin-left:70px">Farmers</h1>







    

    <table  style="width:90%; margin-left:5%" class="table table-success table-striped ">
    <tr>
       
        <tbody>
           <?php
                if($run)
                {
                $count=0;
                while($data = mysqli_fetch_array($run,MYSQLI_ASSOC)){
                $count++;
            ?>
            <tr>
                <th rowspan="2"><?php echo $count; ?></th>
                <th colspan="5"><h3><?php echo $data['name']; ?></h3></th>
                </tr>
            <tr>
                <td><p>CROP: <?php echo $data['crop']; ?></p></td>
                <td><p>Quantity: <?php echo $data['quantity']; ?></p></td>
                <td><p>Rate: <?php echo $data['amount']; ?></p></td>
                <td><p>Call now: <a href="tel:<?php echo $data['phone']; ?>"> <?php echo $data['phone']; ?></a></p></td>
            </tr>
            <?php 
                }
            }
            ?>
        </tbody>
    </tr>
    </table>
          </br>
          </br>
            <?php } ?>
            <?php if($_SESSION['type']=='farmer') { ?>
              <header style="background:none">
          <h1 style="
            color:white;
            text-align:center;
            font-size: 300%;
          "><strong>List Your Crops</h1>
            
      </header>
    <h1 style="color:white ; margin-left:70px">Vendors </h1>

    <table style="width:90%; margin-left:5%" class="table table-success table-striped">
    <tr>
       
        <tbody>
           <?php
                $count=0;
                if($run)
                {
                while($data1 = mysqli_fetch_array($run1,MYSQLI_ASSOC)){
                $count++;
            ?>
            <tr>
                <th rowspan="2"><?php echo $count; ?></th>
                <th colspan="5"><h3><?php echo $data1['name']; ?></h3></th>
                </tr>
            <tr>
                <td><p>CROP: <?php echo $data1['crop']; ?></p></td>
                <td><p>Quantity: <?php echo $data1['quantity']; ?></p></td>
                <td><p>Rate: <?php echo $data1['amount']; ?></p></td>
                <td><p>Call now: <a href="tel:<?php echo $data1['phone']; ?>"> <?php echo $data1['phone']; ?></a></p></td>
            </tr>
            <?php 
                }
            }
            ?>
        </tbody>
    </tr>
    </table>


    





    





          </br>
      <?php } ?>

            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>