<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <?php require_once "dependencias.php"; ?>
</head>
<body>
    <header>
        <div class="logo">
            <h2>Administrador de gastos</h2>
        </div>
        <div class="nav">
            <label><?php echo $_SESSION['usuario']; ?></label>
            <nav>
                <ul>
                    <li><a class="boton" href="../procesos/logout.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>