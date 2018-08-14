<?php
$error_array = array();
if(isset($_POST['registrarse'])){
    $usuario = strip_tags($_POST['usuario']);
    $correo = strip_tags($_POST['correo']);
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    $correo2 = strip_tags($_POST['correo2']);
    $pass = strip_tags($_POST['pass']);
    $pass2 = strip_tags($_POST['pass2']);

    if(strlen($usuario) > 50 || strlen($usuario) < 5){
        array_push($error_array, '<div class="alert alert-danger" role="alert">El usuario debe tener por lo menos 5 caracteres y menor de 50</div>');
    }

    $checarusuario = mysqli_query($con, "SELECT usuario FROM usuarios WHERE usuario = '$usuario'");
    if (mysqli_num_rows($checarusuario) != 0) {
        array_push($error_array, '<div class="alert alert-warning" role="alert">El usuario ya existe</div>');
    }
    if($correo != $correo2){
        array_push($error_array, '<div class="alert alert-warning" role="alert">Los correos no son iguales</div>');
    }
    else{
        if(filter_var($correo, FILTER_SANITIZE_EMAIL)){
            $checkcorreo = mysqli_query($con, "SELECT correo FROM usuarios WHERE correo = '$correo'" );
            if (mysqli_num_rows($checarusuario) != 0) {
                array_push($error_array, '<div class="alert alert-warning" role="alert">El correo ya está registrado</div>');
            }
        }
        else{
            array_push($error_array, '<div class="alert alert-warning" role="alert">Formato de correo no valido</div>');
        }
    }

}

?>