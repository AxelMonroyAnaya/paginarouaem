<?php
// Incluir el archivo de conexión para tener acceso a $conn
require_once('conexion.php');

if (isset($conn)) {
    $conn->close();
    echo "<h1>Conexión cerrada;</h1>";
} else {
    echo "<h1>Conexión cerrada</h1>";
}
?>