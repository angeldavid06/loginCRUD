<?php
    session_start();
    if(isset($_SESSION['usuario'])) {
        header("location: vistas/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    
    <?php require_once "dependencias.php"; ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 img">
                <?php require_once "public/svg/svg-login.php"; ?>
            </div>
            <div class="col-sm-4">
                <h1>Iniciar Sesión</h1>
                <form action="procesos/login.php" method="POST">
                    <label for="usuario">Nombre de usuario</label>
                    <div class="input">
                        <i class="material-icons">account_circle</i>
                        <input type="text" name="usuario" id="usuario" class="form-control">
                    </div>
                    <label for="password">Contraseña</label>
                    <div class="input">
                        <i class="material-icons">vpn_key</i>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <br>
                    <div class="botones">
                        <button class="btn btn-primary">Entrar</button>
                        <a class="btn-registrar" href="registro.php">Registrar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>