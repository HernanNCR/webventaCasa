<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOMME</title>
    <link rel="stylesheet" href="src/controlador/css/style.css">
    <link rel="stylesheet" href="src/controlador/css/style_cuerpo.css">
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
                <li><a href="inicio_sesion.php">inicio de Sesion</a></li>
                <li><a href="registro_usuario.php">Registro Usuario</a></li>
            </ul>

        </nav>
       
    </header>
    <div class="cuerpo">
        <div class="informacion">
            <p class="titulo">Bienvenido a HOOMME</p>
            <br><br>
            <p>Sitio creado para aquellas personas en busca de inmuebles</p>
            <br><br>
            <a href="#"><input type="submit" value="Mas informacion" class="submit_btn"></a>
        </div>
        <div class="informacion_imagen"><img src="src/controlador/img/casa.jpg" width="500px"></div>
    </div>
    <footer>
        <p class="titulo">HOOMME</p>
        <div>
            <p class="Contactanos">Contactanos por Correo</p>
            <div class="correo">
                <input type="text" placeholder="name#gmail.com" class="correo_usuario">
                <input type="submit" value="send" class="enviar">
            </div>
            
        </div>
    </footer>
</body>
</html>