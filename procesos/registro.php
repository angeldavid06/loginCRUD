<?php 
    require_once "../clases/Consultas.php";
    $obj = new Consultas();

    $datos = array(
        $_POST['nombre'],
        $_POST['aP'],
        $_POST['aM'],
        $_POST['mail'],
        $_POST['usuario'],
        $_POST['password']
    );

    if ($obj->insertarUsuarios($datos)) {
        header("location: ../index.php");
    } else {
        header("location: ../registro.php");
    }
?>