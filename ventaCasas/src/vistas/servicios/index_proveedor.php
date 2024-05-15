<?php 
    $usuario = $_GET['usuario'];

    include("../../modelo/conexion.php");

    $sql = "SELECT * FROM table_servicios WHERE nombre_rentor = '$usuario'";
    $stmt= $conn->query($sql);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOMME</title>
    <link rel="stylesheet" href="../../controlador/css/style.css">
    <link rel="stylesheet" href="../../controlador/css/servicios.css">
    <link rel="stylesheet" href="../../controlador/css/font.css">
    <link rel="shortcut icon" href="../../controlador/img/casa.ico" type="image/x-icon">
    <style>
        
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>HOOMME</h1> 
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="registrar_inmueble.php?usuario=<?php echo $usuario;?>">Registrar Inmueble</a></li>
                <li><a class="cerrar_sesion" href="../../controlador/cerrarsesion.php">Cerrar Sesion</a></li>
                
            </ul>

        </nav>
    </header>
    <div class="titulo_pagina">
        <center>
            <p>Menu Proveedor <?php echo '"'.$usuario.'"'; ?></p>
            
        </center>

        
        
    </div>
    <div class="cuerpo">
        <?php foreach( $registros as $filas ) : ?>
            <div class="cartas">
                <div class="carta">
                    <img class="carta_img" src="../../controlador/img/img_locales/<?php echo $filas->img_servicio;?>" width="350px" height="250px">
                    <br><br>
                    <div class="informacion">
                        
                        <p class="titulo_local"><?php echo $filas->nombre_servicio; ?></p>
                        <br>
                        <p><?php echo $filas->precio_servicio.' MXN'; ?></p>
                        <br>
                        <center><a class="detalles" href="../../controlador/eliminarInmueble.php?id_servicios=<?php echo $filas->id_servicios;?>">Eliminar Inmueble ></a></center>
                    </div>
                    
                </div>
            </div>
            <?php endforeach; ?>
    </div>
    
</body>
</html>