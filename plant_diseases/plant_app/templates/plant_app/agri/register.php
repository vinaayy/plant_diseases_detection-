<?php

SESSION_START();

?>
<!doctype html>
<html lang="en">
  <head>

  <style>
    .bgimage{
      background-image: url("farmer.jpg");
      height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
body {font-family: Arial, Helvetica, sans-serif;}
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
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Agri Solution</title>
<?php

include('./db.php');


if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $phone = $_POST['number'];

    if($password == $password1)
    {
    $query = "SELECT * FROM `farmer` WHERE name='$name' ";

    $sql = mysqli_query($con,$query);
    if(mysqli_num_rows($sql) > 0)
    {
            ?>
                <script>
                    alert("User Already Register!");
                </script>
            <?php
    }
    else
    {
        $query = "INSERT INTO `farmer`(`name`, `password`, `phone`) VALUES ('$name','$password','$phone')";

        $sql = mysqli_query($con,$query);

        if($sql)
        {
            $_SESSION['name']=$name;
            ?>
                <script>
                    
                    alert("Registered Successfully!");
                    location.replace("./afterlogin.php");
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
  }
  else
  {
    ?>
      <script>
        alert("Password Not Match");
      </script>
    <?php
  }
}

?>


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
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="./register.php">Register</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>
        <div class="bgimage">
        <form action="" method="post" style="border-width:0px!important;">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Password" name="password1" required>

            <label for="psw"><b>Phone Number</b></label>
            <input type="text" placeholder="Enter Password" name="number" required>
                
            <button type="submit" name="submit">Register</button>
            
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