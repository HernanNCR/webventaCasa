<?php
    include("../modelo/conexion.php");

    $sql = "SELECT * FROM table_servicios WHERE tipo_servicios = 'local'";
    $stmt= $conn->query($sql);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);


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
        .informacion_carta{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .titulo_local{
            font-size: 25px;
        }
        .informacion{
            margin: 10px 20px 10px 20px;
        }
        .carta{
            border-radius: 15px;
        }
        .carta_img{
            border-radius: 15px;
        }
        .carta:hover{
            background-color: lightgray;
            transition: .5s;
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
            <b>Locales</b>
        </center>
        
    </div>
    <div class="cuerpo">
        <?php foreach( $registros as $filas ) : ?>
        <div class="cartas">
            <div class="carta">
                <img class="carta_img" src="../controlador/img/img_locales/<?php echo $filas->img_servicio;?>" width="350px" height="200px">
                <br><br>
                <div class="informacion">
                    <div class="informacion_carta">
                        <img src="../controlador/img/user.svg" width="15px">
                        <p><?php echo $filas->nombre_rentor; ?></p>
                        <img src="../controlador/img/calendar.svg" width="15px">
                        <p><?php echo $filas->fecha_ingreso; ?></p>
                    </div>
                    <br>
                    <p class="titulo_local"><?php echo $filas->nombre_servicio; ?></p>
                    <br><br>
                    <center><a class="detalles" href="descripcion_inmueble.php?id=<?php echo $filas->id_servicios; ?>">Ver Detalles ></a></center>
                </div>
                
            </div>
        </div>
        <?php endforeach; ?>
        
        
        
        
        

        
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