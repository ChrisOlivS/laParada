<?php //Php Code

//Variable Inicialization
$name = "";
$price = 0;
$descript = "";

//Including Database Connection 
include 'connection.php';

//Add Button Code
    if(isset($_POST['add'])){ //If POST Name Add

      if(empty($_POST['nombre'])){
        echo"<script>
        alert('El NOMBRE de el CASADO es un campo necesario, INTENTELO nuevamente');
      </script>";
      }else if(empty($_POST['price'])){
        echo"<script>
        alert('El PRECIO de el CASADO es un campo necesario, INTENTELO nuevamente');
      </script>";
      }else if(empty($_POST['descript'])){
        echo"<script>
        alert('La DESCRIPCION de el CASADO es un campo necesario, INTENTELO nuevamente');
      </script>";
      }else{
        //Variable Inicialization Inside Add Button
        $name = $_POST['nombre'];
        $price = $_POST['price'];
        $descript = $_POST['descript'];

        //INSERT Query For Functionality With Run That Includes Connection & Query
        $query = "INSERT INTO casados(nombre_ca,precio_ca,descripcion_ca) VALUES('$name','$price','$descript')";
        $run = mysqli_query($connection, $query);

        //If Run Happens, Shows Successful Message
        if($run){
            echo "<script>
              alert('El casado ha sido ingresado');
            </script>";
        }else{ //If Not Shows Error Message To User
          echo "<script>
          alert('El casado no ha sido ingresado, INTENTELO nuevamente');
        </script>";
        }
      }
    }
    
//Delete Button Functionality
    if(isset($_POST['delete'])){//If Click on Delete Button

      if(empty($_POST['id'])){
        echo"<script>
        alert('El ID de el CASADO es necesario para ELIMINAR, INTENTELO nuevamente');
      </script>";
      }else{
        //Variable Inicialization Inside If
              $id = $_POST['id'];

              //Query For Delete Inside "Especialidades" Table In DataBase
              $query = "DELETE FROM casados WHERE ID_CASADO = '$id'";
              //Run With Query & Connection Variable
              $run = mysqli_query($connection,$query);

              //If Executes Correctly Shows Succesful Message To User
                if($run){
                    echo "<script>
                      alert('El casado ha sido eliminado');
                    </script>";
                }else{//If Not Error Message
                  echo "<script>
                  alert('El casado no ha sido eliminado, INTENTELO nuevamente');
                </script>";
                }
      }
      
  }

  //Modify Button Functionality
  if(isset($_POST['modify'])){//If Click on Delete Button
    if(empty($_POST['id'])){
      echo"<script>
      alert('El ID de el CASADO es necesario para MODIFICAR, INTENTELO nuevamente');
    </script>";
    }else{
    //Variable Inicialization Inside If
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $price = $_POST['price'];
    $descript =  $_POST['descript'];

    //Query For Update Inside "Especialidades" Table In DataBase
    $query = "UPDATE comida_rapida SET NOMBRE_CA = '$name', precio_CA = '$price', descripcion_CA = '$descript' WHERE ID_CASADO = '$id'";
    //Run With Query & Connection Variable
    $run = mysqli_query($connection,$query);

    //If Executes Correctly Shows Succesful Message To User
      if($run){
          echo "<script>
            alert('El casado ha sido actualizado');
          </script>";
      }else{//If Not Error Message
        echo "<script>
        alert('El casado no ha sido actualizado, INTENTELO nuevamente');
      </script>";
      }
    }
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

<!--Div Container-->
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table-bordered table-hover">
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
  <!--Form-->
<form class="mt-5" action="casados.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >ID Casado</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Precio</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="price">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="descript">
  </div>
   <!--CRUD Buttons-->
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="add">Agregar</button>
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="delete">Eliminar</button>
  <button type="submit" class="btn btn-dark ml-4 mt-5" name="modify">Modificar</button>
</form>
</div>

</body>
</html>