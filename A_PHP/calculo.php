<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Edad</title>
</head>
<body>
    <h1>Cálculo de Edad</h1>
    <form method="post">
        <label for="mes">Mes de nacimiento:</label>
        <input type="number" id="mes" name="mes" min="1" max="12" required><br><br>
        
        <label for="ano">Año de nacimiento:</label>
        <input type="number" id="ano" name="ano" min="1900" max="<?php echo date('Y'); ?>" required><br><br>

        <input type="submit" value="Calcular Edad">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $mesNacimiento = $_POST["mes"];
        $anoNacimiento = $_POST["ano"];

        $mesActual = date("n");
        $anoActual = date("Y");


        $edad = $anoActual - $anoNacimiento;

        if ($mesActual < $mesNacimiento) {
            $edad--;
        }

        // Mostrar la edad calculada
        echo "<p>La edad calculada es: $edad años.</p>";
    }
    ?>
</body>
</html>