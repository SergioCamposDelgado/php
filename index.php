<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $numero_1 = $_GET['num1'];
        $numero_2 = $_GET['num2'];
        // Realizar calculo

        $res = $numero_1 * $numero_2;

        echo "<h2>La multiplicacion de $numero_1 y $numero_2 es $res</h2>";
    ?>
</body>
</html>