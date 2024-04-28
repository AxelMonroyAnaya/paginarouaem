<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../A_CSS/conectar.css">
    <script>
    function desconectar() {
        window.location.href = "desconectar.php";
    }
</script>
</head>

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
        echo '<div class="user">' . $row["user"] . '</div>';
    }
    echo "<br><br>lista de usuarios.";
    echo '<a href="desconectar.php">Desconectar</a>';

    
} else {
    echo "<br><br>No se encontraron usuarios (excepto ROOT) en el servidor.";
}

$conn->close();
?>