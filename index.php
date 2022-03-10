<!DOCTYPE html>
<html lang="en">
<head>
<!--Meta Tags & Title-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Parada</title>
    <!--Bootstrap Links & Scripts-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--CSS-->
    <style>
        body{
            background-color:#D9CE3F;
        }
        h1, h4{
            text-align:center;
            margin-bottom:2%;
        }
        img{
            width:80%;
            margin-bottom:2%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="index.php">LaParada</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio </a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comidas
        </a>
        <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="especialidades.php">Especialidades</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="rice.php">Arroces</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="ceviche.php">Ceviche</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="casados.php">Casados</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fastfood.php">Comidas Rapidas</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="facturacion.php">Facturacion & Co-mandas</a>
      </li>
    </ul>
  </div>
</nav>
  <!--Header IMG-->
<header>
        <img class="col-12" src="./images/logo.png" alt="Logo">
</header>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Bienvenido al Sistema LA PARADA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img src="images/menu1.jpeg" alt="">
        </div>
        <div class="col-6">
            <img src="images/menu2.jpeg" alt="">
        </div>
    </div>
</div>
<footer>
    <h4>Derechos Reservados Fusion Team Developement</h4>
</footer>
</body>
</html>