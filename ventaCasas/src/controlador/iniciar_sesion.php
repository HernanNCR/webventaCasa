<?php

    $correo = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    session_start();

    $_SESSION['correo'] = $correo;

    $conexion =mysqli_connect("localhost","root","root","ventaservicios");

    $consulta = "SELECT * FROM table_usuarios WHERE usuario= '$correo' AND contrasena ='$contrasena'";
    $resultado =mysqli_query($conexion,$consulta);

    $filas=mysqli_fetch_array($resultado);


    if ($filas) {
        $_SESSION['correo'] = $correo;
    
        if ($filas['tipo_usuario'] == 1) {
            header("location:../vistas/bienvenidos.html");
        } elseif ($filas['tipo_usuario'] == 2) {
            header("location:../vistas/servicios/index_proveedor.php?usuario=$correo");
        } elseif ($filas['tipo_usuario'] == 3) {
            header("location:../vistas/admin/menu.php");
        }
    } else {
        // header("location: ../../inicio_sesion.php?error ");
        echo "<script>window.onload = function() { 
            errorSesion(); 
    
            setTimeout(function() {
                window.location.href = '../../inicio_sesion.php';
            }, 1500); 
        }</script>";
    }
    
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOMME</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_sesion.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="shortcut icon" href="img/casa.ico" type="image/x-icon">
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
        <!-- <nav>
            <ul class="nav-links">
            <li><a href="index.php">Inicio</a></li>
                <li><a href="registro_usuario.php">Registrarse</a></li>
            </ul>

        </nav> -->
    </header>


    <div class="cuerpo">
        <form action="" method="post" class="inicio_sesion">
            <div class="info">
                <label for="">Nombre de Usuario</label><br>
                <input type="text" name="usuario" readonly>
            </div><br><br>
            <div class="info">
                <label for="">Contraseña de Usuario</label><br>
                <input type="password" name="contrasena" readonly>
            </div>
            <br><br>
            <input type="submit" value="Inicio De Sesion" class="inicio" readonly>
        </form>
    </div>



    
    <script src="app.js"></script>
</body>
</html>

