<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CROP Solution</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
</head>
   
<body style="
      background-image: linear-gradient(rgba(0,0,0,0.527),rgba(0,0,0,0.5)),url('https://i.ibb.co/DCVrXwk/bg.webp');
      height: 700px;
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
        
        <center>
        <header style="background:none">
          <h1 style="
            color:white;
            font-size: 300%;">
            <strong>Select Location</strong></h1>
            
      </header></center>
    <div class=>
        <div class="weather">
            <p id="city" class="weatherInfo"></p>
            <p id="currentTime" class="weatherInfo"></p>
            <p id="temperature" class="weatherInfo"></p>
            <p id="humidity" class="weatherInfo"></p>
            <p id="wind" class="weatherInfo"></p>
            
            
            <form method="get" action="./try.html">
            <select name="id" >
            
                <option value="19">Maharashtra</option>
                <option value="1">Andaman</option>
                <option value="2">Andhra Pradesh</option>
                <option value="3">Arunachal Pradesh</option>
                <option value="4">Assam</option>
                <option value="5">Bihar</option>
                <option value="6">Chandigarh</option>
                <option value="7">Chhattisgarh</option>
                <option value="8">Dadra And Nagar Haveli</option>
                <option value="9">Delhi</option>
                <option value="10">Goa</option>
                <option value="11">Haryana</option>
                <option value="12">Himachal Pradesh</option>
                <option value="13">Jammu And Kashmir</option>
                <option value="14">Jarkhand</option>
                <option value="15">Karnataka</option>
                <option value="16">Kerala</option>
                <option value="17">Lakshadweep</option>
                <option value="18">Madhya Pradesh</option>
                
                <option value="20">Manipur</option>
                <option value="21">Meghalaya</option>
                <option value="22">Mizoram</option>
                <option value="23">Nagaland</option>
                <option value="24">Orissa</option>
                <option value="25">Puducherry</option>
                <option value="26">Punjab</option>
                <option value="27">Rajasthan</option>
                <option value="28">Sikkim</option>
                <option value="29">Tamil Nadu</option>
                <option value="30">Tripura</option>
                <option value="31">Uttar Pradesh</option>
                <option value="32">Uttaranchal</option>
                <option value="33">West Bengal</option>
            
            </select>
            <button class="btn btn-info text-light " type="submit">Submit</button>
</br>
        </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="index.js"></script>
</body>
</html>
