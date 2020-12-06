<?php 

    require_once "../clases/consultasGasto.php";
    $obj = new consultasGasto();

    echo $obj->eliminarGasto($_POST['idGasto']);

?>