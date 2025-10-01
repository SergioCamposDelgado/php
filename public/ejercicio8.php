<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>



    <form  method="post">
        <label for="numero">Numero: </label>
        <input type="number" name="numero" />
        <input type="submit" value="Enviar" />
    </form>
    <?php
    if (isset($_POST["numero"])) {
        $n = $_POST["numero"];
        echo "<h2>Tabla del $n</h2>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>" . $n . " x </td><td>" . $i . " = </td><td>" . ($i * $n) . "</td></tr>";
        }
        echo "</table>";
    } else  {
        echo "<h2>Numero no enviado</h2>";
    }
    ?>


</body>

</html>