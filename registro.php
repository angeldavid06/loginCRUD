<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <?php require_once "dependencias.php";?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Formulario de registro</h1>
                    <div class="form-registro">
                    <form action="procesos/registro.php" method="POST">
                        <div class="registro inf-personal">
                            <h3>Información personal</h3>
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" require="">
                            
                            <label for="nombre">Apellido Paterno</label>
                            <input type="text" id="aP" name="aP" class="form-control" require="">
                            
                            <label for="nombre">Apellido Materno</label>
                            <input type="text" id="aM" name="aM" class="form-control" require="">
                            
                            <label for="nombre">email</label>
                            <input type="email" id="mail" name="mail" class="form-control" require="">
                        </div>
                        <div class="registro">
                            <h3>Información de la cuenta</h3>
                            <label for="usuario">Nombre de usuario</label>
                            <div class="input">
                                <i class="material-icons">account_circle</i>
                                <input type="text" name="usuario" id="usuario" class="form-control" require="">
                            </div>
                            <label for="password">Contraseña</label>
                            <div class="input">
                                <i class="material-icons">vpn_key</i>
                                <input type="password" name="password" id="password" class="form-control" require="">
                            </div>
                        </div>
                        <br>
                        <div class="botones">
                            <button class="btn btn-primary">Confirmar</button>
                            <a href="index.php" class="btn-login">Iniciar Sesión</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3 img">
                <?php require_once "public/svg/svg-signin.php"; ?>
            </div>
        </div>
    </div>
</body>
</html>