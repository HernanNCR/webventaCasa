<?php 
    include ("../modelo/conexion.php");

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $tipo = $_POST['tipo'];
    $nombre_usuario = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO table_usuarios(usuario,contrasena,tipo_usuario,nombre_usuario,direccion_usuario,celular_usuario)VALUES(:usuario,:contra,:tipo,:nombre,:dire,:tel)";
    $stmt = $conn->prepare($sql);
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":usuario",$usuario);
    $stmt->bindParam(":contra", $contrasena);
    $stmt->bindParam(":tipo", $tipo);
    $stmt->bindParam(":nombre", $nombre_usuario);
    $stmt->bindParam(":dire", $direccion);
    $stmt->bindParam(":tel",$telefono);

    if($stmt->execute()){
        echo "datos subidos";
        header("location: menu.php");
    } else {
        echo "<script>window.onload = function() { 
            errorSesion(); 

            setTimeout(function() {
                window.location.href = '../vistas/admin/registrar_usuario.php';
            }, 3000); 
        }</script>";
    }

?> 
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
                <input type="text" name="usuario" readonly>
            </div><br><br>
            <div class="info">
                <label for="">Contraseña de Usuario</label><br>
                <input type="password" name="contrasena" readonly>
            </div>
            <br><br>
            <div class="info">
                <label for="">Tipo de Usuario</label><br>
                <select name="tipo" readonly>
                    <option value=""></option>
                    <option value="1">Usuario</option>
                    <option value="2">Proveedor</option>
                    <option value="3">Administrador</option>
                </select>
            </div>
            <br><br>
            <div class="info">
                <label for="">Nombre Completo</label><br>
                <input type="text" name="nombre" readonly>
            </div><br><br>
            <div class="info">
                <label for="">Direccion</label><br>
                <input type="text" name="direccion" readonly>
            </div><br><br>
            <div class="info">
                <label for="">Telefono</label><br>
                <input type="number" name="telefono" readonly>
            </div><br><br>
            <input type="submit" value="Registrar Usuario" class="inicio" readonly>
        </form>
    </div>



    <script src="app.js"></script>
</body>
</html>