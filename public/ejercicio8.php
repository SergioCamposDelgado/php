<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>



    <form action="ejercicio8.php" method="get">
        <input type="number" name="numero" />
        <input type="submit" value="Enviar" />
    </form>
    <?php
    if (isset($_GET["numero"])) {
        $n = $_GET["numero"];
        echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td>".$n." x </td><td>".$i." = </td><td>". ($i*$n)."</td></tr>";
            } 
        echo "</table>";
    }
    ?>


</body>

</html>