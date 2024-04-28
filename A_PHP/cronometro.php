<!DOCTYPE html>
<html>
<head>
    <title>Cronómetro Digital</title>
    <link rel="stylesheet" href="../A_CSS/pedido.css">
    <link rel="stylesheet" href="../A_CSS/menu.css">
</head>
<body>
    <a id="totalbut" style="text-decoration: none;" href="/26_MAA/index.html">Regresar a la página de Inicio</a>
    <h1>Cronómetro Digital</h1>
    <?php
    $horas = 0;
    $minutos = 0;
    $segundos = 0;

    echo "<h2>cronometro:</h2>";
    for ($horas = 0; $horas <= 23; $horas++) {
        $minutos = 0;
        while ($minutos <= 59) {
            $segundos = 0;
            do {
                echo "<p>$horas:$minutos:$segundos</p>";
                $segundos++;
            } while ($segundos <= 59);
            $minutos++;
        }
    }
    ?>

</body>
</html>