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

    if ($datos[0] == '') {
        echo 2;
    } else if ($datos[1] == '') {
        echo 3;
    } else if ($datos[2] == '') {
        echo 4;
    } else if ($datos[3] == '') {
        echo 5;
    } else if ($datos[4] == '') {
        echo 6;
    } else if ($datos[5] == '') {
        echo 7;
    } else {
        echo $obj->insertarUsuarios($datos);    
    }
?>