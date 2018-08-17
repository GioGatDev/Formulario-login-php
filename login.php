<?php
    include("conexion.php");
    include("login_handler.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/php.png" type="image/x-icon">
    <title>Formulario PHP</title>
    <!--Animate css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Estilos Custom-->
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
  <div class="container">
  <div class="row text-center mt-20">
  <div class="col-md-3 shadow p-3 mb-5 bg-white rounded mx-auto">
  <h1 class="display-1 text-center">LOGIN</h1>
  <form action="login.php" method="POST">
  <div class="form-group">
    <label for="usuario">Usuario:</label>
    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingresa un Usuario">
  </div>
  <div class="form-group">
    <label for="pass">Contraseña:</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
  </div>
  <?php 
  if(in_array('<div class="alert alert-danger mt-2" role="alert">Usuario o contraseña incorrectos</div>', $error_array)) echo '<div class="alert alert-danger mt-2" role="alert">Usuario o contraseña incorrectos</div>';
  ?>
  <button type="submit" name="login" class="btn btn-primary">Iniciar sesión</button><br/>
  <a class="mt-2" href="registrar.php">¿Aún no tienes cuenta?, Registrarte</a>
</form>
  </div>
  </div>
  </div>
<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    

</body>
</html>