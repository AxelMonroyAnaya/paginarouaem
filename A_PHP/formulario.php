<!DOCTYPE html>
<html>
<head>
    <title>Formulario de conexión a la base de datos</title>
    <link rel="stylesheet" href="../A_CSS/conexion.css">
</head>
<body>

<div class="container">
    <h2>Ingrese los datos de conexión</h2>

    <form method="post" action="procesar.php">
        Usuario: <input type="text" name="username"><br><br>
        Contraseña: <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Conectar">
    </form>
</div>

</body>
</html>