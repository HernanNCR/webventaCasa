<?php
    $id_servicio = $_GET['id_servicios'];

    // Incluir el archivo de conexión
    include("../modelo/conexion.php");

    // Crear la consulta SQL para eliminar el registro
    $sql = "DELETE FROM table_servicios WHERE id_servicios = '$id_servicio'";

    // Ejecutar la consulta
    $resultado = $conn->query($sql);

    // Verificar si la consulta se ejecutó correctamente
    if ($sql === false) {
        // Redirigir a la página de destino después de eliminar el registro
        echo "Error al eliminar el registro: ";
        
    } else {
        // Manejar el caso en que la consulta no se ejecute correctamente
        
        header("location:../vistas/admin/menu.php");
    }
?>
