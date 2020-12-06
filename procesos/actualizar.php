<?php 
    require_once "../clases/Conexion.php";
    require_once "../clases/consultasGasto.php";
    $obj = new consultasGasto();

    $datos = array(
        $_POST['idGasto'],
        $_POST['conceptoA'],
        $_POST['cantidadA'],
        $_POST['fechaA']
    );

    echo $obj->actualizarGasto($datos);
?>