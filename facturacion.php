<?php //Php Code

//Variable Inicialization
$comida = "";

//Including Database Connection 
include 'connection.php';

//Exists "Comida" Variable in
if(isset($_POST['comida'])){
    $comida = $_POST['comida'];
}else{
    $comida = "";
}

?>

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

      table{
        margin-top:4%;
        width: 100%;
        font-size:100%;
      }
      button{
        margin-bottom:2%;
      }
      nav{
        position:absolute;
      }
      h6{
          margin-top:2%;
      }
      #radioBtn{
          margin-left:8%;
      }
      h5{
        text-align:center;
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


  <!--Form-->
<form class="mt-5" action="facturacion.php" method="post">



<!--Div Container For DataGrid-->
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table-bordered table-hover">
        <tr class="bg bg-warning">
          <td>ID Especialidad</td>
          <td>Nombre</td>
          <td>Precio</td>
          <td>Descripcion</td>
        </tr>
        
          <?php
          $query="SELECT * FROM especialidades";
          $run = mysqli_query($connection,$query);
          while($show = mysqli_fetch_array($run)){
          ?>
            <tr class="table-primary">
              <td><?php echo $show['ID_ESPECIALIDAD'] ?></td>
              <td><?php echo $show['NOMBRE'] ?></td>
              <td><?php echo $show['PRECIO'] ?></td>
              <td><?php echo $show['DESCRIPCION'] ?></td>
            </tr>
          <?php 
          }
          ?>
        <tr class="bg bg-warning">
          <td>ID Arroz</td>
          <td>Nombre</td>
          <td>Precio</td>
          <td>Descripcion</td>
        </tr>
        
          <?php
          $query="SELECT * FROM arroces";
          $run = mysqli_query($connection,$query);
          while($show = mysqli_fetch_array($run)){
          ?>
            <tr class="table-primary">
              <td><?php echo $show['ID_ARROZ'] ?></td>
              <td><?php echo $show['NOMBRE_A'] ?></td>
              <td><?php echo $show['PRECIO_A'] ?></td>
              <td><?php echo $show['DESCRIPCION_A'] ?></td>
            </tr>
          <?php 
          }
          ?>
        <tr class="bg bg-warning">
          <td>ID Comida Rapida</td>
          <td>Nombre</td>
          <td>Precio</td>
          <td>Descripcion</td>
        </tr>
        
          <?php
          $query="SELECT * FROM comida_rapida";
          $run = mysqli_query($connection,$query);
          while($show = mysqli_fetch_array($run)){
          ?>
            <tr class="table-primary">
              <td><?php echo $show['ID_RAPIDA'] ?></td>
              <td><?php echo $show['NOMBRE_CR'] ?></td>
              <td><?php echo $show['PRECIO_CR'] ?></td>
              <td><?php echo $show['DESCRIPCION_CR'] ?></td>
            </tr>
          <?php 
          }
          ?>
        <tr class="bg bg-warning">
          <td>ID Ceviche</td>
          <td>Nombre</td>
          <td>Precio</td>
          <td>Descripcion</td>
        </tr>
        
          <?php
          $query="SELECT * FROM ceviches";
          $run = mysqli_query($connection,$query);
          while($show = mysqli_fetch_array($run)){
          ?>
            <tr class="table-primary">
              <td><?php echo $show['ID_CEVICHE'] ?></td>
              <td><?php echo $show['NOMBRE_C'] ?></td>
              <td><?php echo $show['PRECIO_C'] ?></td>
              <td><?php echo $show['DESCRIPCION_C'] ?></td>
            </tr>
          <?php 
          }
          ?>
        <tr class="bg bg-warning">
          <td>ID Casado</td>
          <td>Nombre</td>
          <td>Precio</td>
          <td>Descripcion</td>
        </tr>
        
          <?php
          $query="SELECT * FROM casados";
          $run = mysqli_query($connection,$query);
          while($show = mysqli_fetch_array($run)){
          ?>
            <tr class="table-primary">
              <td><?php echo $show['ID_CASADO'] ?></td>
              <td><?php echo $show['NOMBRE_CA'] ?></td>
              <td><?php echo $show['PRECIO_CA'] ?></td>
              <td><?php echo $show['DESCRIPCION_CA'] ?></td>
            </tr>
          <?php 
          }
          ?>
      </table>
    </div>
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >ID Factura</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_factura">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre Cliente</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Comida</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_comida">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="telefono">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Total</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="total_pagar" readonly>
  </div>
   <!--CRUD Buttons-->
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="add">Agregar</button>
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="delete">Eliminar</button>
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="modify">Modificar</button>
  <table class="table-bordered table-hover">
    <h5>Factura</h5>
        <tr class="bg bg-warning">
          <td>ID Factura</td>
          <td>Nombre Cliente</td>
          <td>ID Comida</td>
          <td>Telefono</td>
          <td>Total Pagar</td>
        </tr>
        
          <?php
          $query="SELECT * FROM facturacion";
          $run = mysqli_query($connection,$query);
          while($show = mysqli_fetch_array($run)){
          ?>
            <tr class="table-primary">
              <td><?php echo $show['ID_FACTURA'] ?></td>
              <td><?php echo $show['NOMBRE_CLIENTE'] ?></td>
              <td><?php echo $show['ID_COMIDA'] ?></td>
              <td><?php echo $show['TELEFONO'] ?></td>
              <td><?php echo $show['TOTAL_PAGAR'] ?></td>
            </tr>
          <?php 
          }
          ?>
      </table>
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="imprimirF">Imprimir Factura</button>
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="imprimirC">Imprimir Co-Manda</button>
</form>

</div>

</body>
</html>