<?php

SESSION_START();

?>

<?php

include('./db.php');

    $choice = $_POST['choice'];
    $query = "SELECT * FROM `group1` WHERE `district`='$choice'";
    $sql = mysqli_query($con,$query);
    // if($sql)
    // {
    //     echo "Success";
    // }
    $data = mysqli_fetch_array($sql);
    $area = $data[2]; 
    $query1 = "SELECT * FROM `crop` WHERE `area`='$area'";
    $sql1 = mysqli_query($con,$query1);
    $data1 = mysqli_fetch_array($sql1);
    //print_r($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
    <title>Result</title>
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
                <a class="nav-link active" href="./">Logout</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>
        
    <div class="bgimage pt-5">
    <div class="container bg-light">
        <div class="text-info ">
            You Choose <?php echo "$choice"; ?> district. <br>
            Prefeable Crop:-
            First Crop is
            <?php
               echo $data1[2];
            ?><br>
            and Second Crop is
            <?php
                echo $data1[3];
            ?>
        </div>
    </div>
    </div>
</body>
</html>











