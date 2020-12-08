<?php 
    require_once "../clases/consultasGasto.php";
    $obj = new consultasGasto();
    $datos = array($_POST['concepto'], $_POST['cantidad'], $_POST['fecha']);
    
    if ($datos[0] == '') {
        echo 2;
    } else if ($datos[1] == '') {
        echo 3;
    } else if ($datos[2] == '') {
        echo 4;
    } else {
        echo $obj->nuevoGasto($datos);
    }

?>