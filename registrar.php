<?php
    include("conexion.php");
    include("registrar_handler.php");
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

</head>
<body>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <form action="registrar.php" method="POST">
  <div class="form-group">
    <label for="usuario">Usuario:</label>
    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingresa un Usuario">
    <?php if(in_array('<div class="alert alert-danger" role="alert">El usuario debe tener por lo menos 5 caracteres y menor de 50</div>', $error_array)) echo '<div class="alert alert-danger" role="alert">El usuario debe tener por lo menos 5 caracteres y menor de 50</div>'; ?>
  </div>
  <div class="form-group">
    <label for="correo">Correo:</label>
    <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingresa tu Email">
  </div>
  <div class="form-group">
    <label for="confirmemail">Confirma tu correo:</label>
    <input type="email" class="form-control" id="confirmemail" name="correo2" aria-describedby="emailHelp" placeholder="Confirma tu Email">
  </div>
  <div class="form-group">
    <label for="pass">Contraseña:</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
  </div>
  <div class="form-group">
    <label for="pass2">Confirma tu contraseña:</label>
    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirma tu contraseña">
  </div>
  <button type="submit" name="registrarse" class="btn btn-primary">Registrar</button>
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