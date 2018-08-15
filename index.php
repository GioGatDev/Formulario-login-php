<?php
session_start();
 if(isset($_SESSION['usuario'])){
     $usuario = $_SESSION['usuario'];
 }
 else{
     header("Location: login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <!--Animate css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Estilos Custom-->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1 class="display-1 text-center"><?php echo "Bienvenido " . $usuario; ?></h1>
<a href="logout.php">Cerrar sesión</a>
</div>
</div>
</div>
    
</body>
</html>