<?php 
    session_start();
    require_once "../clases/Consultas.php";

    $obj = new Consultas();

    $datos = array(
        $_POST['usuario'],
        $_POST['password']
    );

    echo $obj->login($datos);
?>