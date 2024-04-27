<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "00_RCB";
$password = "12345";
$database = "MiBase";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Consulta para obtener todos los usuarios excepto ROOT
$sql = "SELECT user FROM mysql.user WHERE user != 'root'";

// Ejecutar la consulta
$result = $conn->query($sql);
// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Mostrar los usuarios encontrados
    echo "Usuarios del servidor (excepto ROOT):";
    while ($row = $result->fetch_assoc()) {
        echo "<br>- " . $row["user"];
    }
    echo "<br>Acciones realizadas satisfactoriamente.";
} else {
    echo "No se encontraron usuarios (excepto ROOT) en el servidor.";
}

// Cerrar la conexión
$conn->close();
?>