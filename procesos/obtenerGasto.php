<?php
    require_once "../clases/Conexion.php";
    require_once "../clases/consultasGasto.php";

    $obj = new consultasGasto();
    echo json_encode($obj->obtenerGasto($_POST['idGasto']));
?>