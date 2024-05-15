<?php 
    include("../modelo/conexion.php");
    $id = $_GET['id']; 



    $sql = "SELECT * FROM table_servicios WHERE id_servicios = '$id'";
    $stmt= $conn->query($sql);
    $registros = $stmt->fetch(PDO::FETCH_OBJ);

?>
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
        .cuerpo .imagen{
            width: 50%;
            height: auto;
        }
        .cuerpo .informacion{
            width: 40%;
            height: auto;
            margin: 10px;
        }
        .informacion .info{
            margin: 100px;
        }
        .info input{
            width: 100px;
            height: 30px;
            border-radius: 10px;
            background-color: blue;
            color: white;
            cursor: pointer;
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
    <div class="cuerpo">

        <div class="imagen">
            <img src="../controlador/img/img_locales/<?php echo $registros->img_servicio; ?>" width="100%" height="450px">
        </div>
        
        <div class="informacion">
            <div class="info">
                <h1><?php echo $registros->nombre_servicio; ?></h1><br>
                <h2>Precio: <?php echo $registros->precio_servicio .' MXN'; ?></h2><br><br>
                <input type="submit" value="Contratar">
            </div>
            
        </div>
        

        
    </div>
    
</body>
</html>