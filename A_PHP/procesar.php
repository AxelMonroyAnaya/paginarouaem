<?php
require_once('conexion.php');

$servername = "localhost:3308"; // Cambia el puerto si es necesario
$username = $_POST['username'];
$password = $_POST['password'];
$database = "MiBase";

$conn = conectarDB($servername, $username, $password, $database);

$sql = "SELECT user FROM mysql.user WHERE user != 'root'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Usuarios del servidor (excepto ROOT):</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "<br>- " . $row["user"];
    }
    echo "<br><br>lista de usuarios.";
} else {
    echo "<br><br>No se encontraron usuarios (excepto ROOT) en el servidor.";
}

$conn->close();
?>