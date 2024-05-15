<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOMME</title>
    <link rel="stylesheet" href="src/controlador/css/style.css">
    <link rel="stylesheet" href="src/controlador/css/style_sesion.css">
    <link rel="stylesheet" href="src/controlador/css/font.css">
    <link rel="shortcut icon" href="src/controlador/img/casa.ico" type="image/x-icon">
    <style>
        .logo a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="index.php"><h1>HOOMME</h1></a>
        </div>
        <nav>
            <ul class="nav-links">
            <li><a href="index.php">Inicio</a></li>
                <li><a href="registro_usuario.php">Registrarse</a></li>
            </ul>

        </nav>
    </header>


    <div class="cuerpo">
        <form action="src/controlador/iniciar_sesion.php" method="post" class="inicio_sesion">
            <div class="info">
                <label for="">Nombre de Usuario</label><br>
                <input type="text" name="usuario">
            </div><br><br>
            <div class="info">
                <label for="">Contraseña de Usuario</label><br>
                <input type="password" name="contrasena">
            </div>
            <br><br>
            <input type="submit" value="Inicio De Sesion" class="inicio">
        </form>
    </div>



    
    
</body>
</html>