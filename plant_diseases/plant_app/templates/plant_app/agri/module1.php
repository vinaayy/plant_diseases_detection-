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
    <title>
        Module 1
    </title>
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
    <div class="bgimage">
    <div class="container p-5">
    <form method="post" action="./mod1.php">
    <select name="choice" id="">
        <option value="thane">Thane</option>
        <option value="palghar">Palghar</option>
        <option value="mumbai">Mumbai</option>
        <option value="raigad">Raigad</option>
        <option value="ratnagiri">Ratnagiri</option>
        <option value="sindhudurg">Sindhudurg</option>
        <option value="nandurbar">Nandurbar</option>
        <option value="dhule">Dhule</option>
        <option value="jalgaon">Jalgaon</option>
        <option value="nashik">Nashik</option>
        <option value="ahmednagar">Ahmednagar</option>
        <option value="pune">Pune</option>
        <option value="satara">Satara</option>
        <option value="solapur">Solapur</option>
        <option value="sangli">Sangli</option>
        <option value="kolhapur">Kolhapur</option>
        <option value="aurangabad">Aurangabad</option>
        <option value="jalna">Jalna</option>
        <option value="parbhani">Parbhani</option>
        <option value="hingoli">Hingoli</option>
        <option value="nanded">Nanded</option>
        <option value="latur">Latur</option>
        <option value="beed">Beed</option>
        <option value="osmanabad">Osmanabad</option>
        <option value="buldhana">Buldhana</option>
        <option value="akola">Akola</option>
        <option value="washim">Washim</option>
        <option value="amravati">Amravati</option>
        <option value="yavatmal">Yavatmal</option>
        <option value="wardha">Wardha</option>
        <option value="nagpur">Nagpur</option>
        <option value="chandrapur">Chandrapur</option>
        <option value="bhandara">Bhandara</option>
        <option value="gondia">Gondia</option>
        <option value="gadchiroli">Gadchiroli</option>
        <option value="mumbai_subarban">Mumbai Subarban</option>
    </select>
    <button class="btn btn-info text-light " type="submit">Submit</button>
    </form>
    </div>
    </div>
</body>
</html>