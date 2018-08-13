<?php
$con = mysqli_connect("localhost", "root", "", "formulario");
if(mysqli_connect_errno()){
    echo ("Error durante la conexión" . mysqli_connect_errno());
}

?>
