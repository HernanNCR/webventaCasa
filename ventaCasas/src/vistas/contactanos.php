<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOMME</title>
    <link rel="stylesheet" href="../controlador/css/style.css">
    <link rel="stylesheet" href="../controlador/css/styleservicios.css">
    <link rel="stylesheet" href="../controlador/css/font.css">
    <link rel="shortcut icon" href="../controlador/img/casa.ico" type="image/x-icon">
    <style>
        .cuerpo{
            height: 570px;
        }
        .contenedor_contacto{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 95%;
            margin: 30px;
        }
        .contenedor_contacto img{
            margin-right: 10px;
        }
        .cuerpo{
            display: inline-block;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>HOOMME</h1>
        </div>
        <nav>
            <ul class="nav-links">
            <li><a href="bienvenidos.html">Bienvenidos</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="locales.php">Locales</a></li>
                <li><a href="pisos.php">Pisos</a></li>
                <li><a href="edificios.php">Edificios</a></li>
                <li><a href="contactanos.php">Contactanos</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
            </ul>

        </nav>
        <a href="" ><div class="btn" style="margin-right: 10px;"><img src="../controlador/img/9042869_phone_icon.svg" width="25px"></div></a>
        <a href="../controlador/cerrarsesion.php" ><div class="btn"><img src="../controlador/img/out.svg" width="25px"></div></a>
    </header>
    <div class="titulo_pagina">
        <center>
            <b>Contactanos</b>
        </center>
        
    </div>
    <div class="cuerpo">
        
        <div class="contenedor_contacto">
            <img src="../controlador/img/9042869_phone_icon.svg" width="30px">
            <p>########</p>
        </div>
        <div class="contenedor_contacto">
            <img src="../controlador/img/email.svg" width="30px">
            <p>HOOMMElll#gmail.com</p>
        </div>
        <div class="contenedor_contacto">
            <img src="../controlador/img/user.svg" width="30px">
            <p>HOOMME.EMPRESS</p>
        </div>
        
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