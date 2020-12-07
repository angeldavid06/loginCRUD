<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location: ../");
    }

    require_once "modulos/header.php";
    require_once "modulos/modal.php";
    require_once "alert/alerts.php";
?>
    <main>
        <div class="titulo">
            <span class="nuevo">
                Agregar nuevo
                <i class="material-icons">add</i>
            </span>
        </div>
        <div id="cargaDatos" class="tabla">
        </div>
    </main>
</body>
</html>