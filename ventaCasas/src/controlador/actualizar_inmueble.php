<?php 
    include("../modelo/conexion.php");
    $nombre_inmueble = $_POST[''];
    $nombre = $_POST[''];
    $precio = $_POST[''];
    $tipo = $_POST[''];
    $nombre_img = $_FILES['foto']['name'];

    $id = $_GET['id'];

    $sql = "UPDATE table_servicios WHERE id_servicios = '$id' SET tipo_servicio = '$tipo',
    nombre_servicio = '$nombre_inmmueble', nombre_rentor = '$nombre',precio_servicio = '$precio',img_servicio='$nombre_img'";


    if ($conn->query($sql) === TRUE) {
        // Si la actualización se realizó con éxito, redirigir a una página de confirmación o a donde desees
        header("Location: ../vistas/servicios/index_proveedor.php");
        exit;
    } else {
        // Si hubo un error en la consulta, mostrar un mensaje de error
        echo "Error al actualizar el registro: ";
    }


?>