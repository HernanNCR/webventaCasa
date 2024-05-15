<?php
// Iniciar sesión
session_start();

// Eliminar todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir a alguna página después de cerrar sesión
header("Location: ../../index.php");

?>