<?php
function conectarDB($servername, $username, $password, $database) {
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Error al conectar : ");
    }
    return $conn;
}
?>