<?php 
    require_once "../clases/consultasGasto.php";
    $obj = new consultasGasto();
    
    $datos = array($_POST['concepto'], $_POST['cantidad'], $_POST['fecha']);

    echo $obj->nuevoGasto($datos);
?>