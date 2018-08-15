<?php
$error_array = array();
    if(isset($_POST['login'])){
        $usuario = strip_tags($_POST['usuario']);
        $pass = strip_tags($_POST['pass']);
        $pass = md5($pass);

        $query = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$pass'");
        $checkpass = mysqli_num_rows($query);
        if($checkpass == 1){
            $_SESSION['usuario'] = $usuario;
            header("Location: index.php");
        }
        else{
            array_push($error_array, '<div class="alert alert-danger mt-2" role="alert">Usuario o contraseña incorrectos</div>');
        }
    }
?>