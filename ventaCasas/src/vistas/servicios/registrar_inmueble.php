<?php 
    $usuario = $_GET['usuario'];

    // include("../../modelo/conexion.php");

    // $sql = "SELECT * FROM table_servicios WHERE nombre_rentor = '$usuario'";
    // $stmt= $conn->query($sql);
    // $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOMME</title>
    <link rel="stylesheet" href="../../controlador/css/style.css">
    <link rel="stylesheet" href="../../controlador/css/styleservicios.css"> 
    <link rel="stylesheet" href="../../controlador/css/font.css">
    <link rel="shortcut icon" href="../../controlador/img/casa.ico" type="image/x-icon">
    <style>
        .registrarbtn{
            width: 200px;
            height: 30px;
            border-radius: 20px;
        }
        select{
            width: 100%;
            height: 40px;
            text-align: center;
            font-size: 20px;
            border-radius: 20px;
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
                <li><a href="index_proveedor.php?usuario=<?php echo $usuario;?>">Inmuebles Registrados</a></li>
                <li><a class="cerrar_sesion" href="../../controlador/cerrarsesion.php">Cerrar Sesion</a></li>
                
            </ul>

        </nav>
    </header>
    <div class="cuerpo">
        <form action="../../controlador/registrar_inmueble.php" method="post" class="inicio_sesion" enctype="multipart/form-data">
            <div class="info"> 
                <label for="">Nombre Inmueble</label><br>
                <input type="text" name="nombre_inmueble" required> 
            </div><br><br>
            <div class="info">
                <label for="">Fecha ingreso</label><br>
                <input type="date" name="fecha" required>
            </div>
            <br><br>
            <div class="info">
                <label for="">Nombre Rentor</label><br>
                <input type="text" value="<?php echo $usuario; ?>" name="nombre" readonly>
            </div><br><br>
            <div class="info">
                <label for="">Precio Inmueble</label><br>
                <input type="number" name="precio" required>
            </div><br><br>
            <div class="info">
                <label for="">Tipo del Inmueble</label><br>
                <select name="tipo" required>
                    <option value="Local">Local</option>
                    <option value="Piso">Piso</option>
                    <option value="Edificio">Edificio</option>
                </select>
            </div><br><br>
            <div class="info">
                <label for="">Imagen del Inmueble</label><br>
                <input type="file" name="foto" accept="image/*" required>
            </div><br><br>
            <input type="submit" value="Registrar Inmueble" class="registrarbtn">
        </form>
    </div>
    
</body>
</html>