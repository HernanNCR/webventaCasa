<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOMME</title>
    <link rel="stylesheet" href="../../controlador/css/style.css">
    <link rel="stylesheet" href="../../controlador/css/style_sesion.css">
    <link rel="stylesheet" href="../../controlador/css/font.css">
    <link rel="shortcut icon" href="../../controlador/img/casa.ico" type="image/x-icon">
    <style>
        .logo a{
            text-decoration: none;
            color: white;
        }
        select{
            width: 70%;
            height: 30px;
            border-radius: 10px;
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
                <li><a href="menu.php">Inicio</a></li>
                <li><a class="cerrar_sesion" href="../../controlador/cerrarsesion.php">Cerrar Sesion</a></li>
            </ul>

        </nav>
    </header>



    <div class="cuerpo">
        <form action="../../controlador/registrar_usuario_admin.php" method="post" class="inicio_sesion">
            <div class="info"> 
                <label for="">Usuario</label><br>
                <input type="text" name="usuario">
            </div><br><br>
            <div class="info">
                <label for="">Contraseña de Usuario</label><br>
                <input type="password" name="contrasena">
            </div>
            <br><br>
            <div class="info">
                <label for="">Tipo de Usuario</label><br>
                <select name="tipo">
                    <option value=""></option>
                    <option value="1">Usuario</option>
                    <option value="2">Proveedor</option>
                    <option value="3">Administrador</option>
                </select>
            </div>
            <br><br>
            <div class="info">
                <label for="">Nombre Completo</label><br>
                <input type="text" name="nombre">
            </div><br><br>
            <div class="info">
                <label for="">Direccion</label><br>
                <input type="text" name="direccion">
            </div><br><br>
            <div class="info">
                <label for="">Telefono</label><br>
                <input type="number" name="telefono">
            </div><br><br>
            <input type="submit" value="Registrar Usuario" class="inicio">
        </form>
    </div>



    
</body>
</html>