<?php
$error_array = array();
if(isset($_POST['registrarse'])){
    $usuario = strip_tags($_POST['usuario']);
    $correo = strip_tags($_POST['correo']);
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    $correo2 = strip_tags($_POST['correo2']);
    $pass = strip_tags($_POST['pass']);
    $pass2 = strip_tags($_POST['pass2']);

    if(strlen($usuario) > 50 || strlen($usuario) < 8){
        array_push($error_array, '<div class="alert alert-danger" role="alert">El usuario debe tener por lo menos 5 caracteres y menor de 50</div>');
    }

}
?>