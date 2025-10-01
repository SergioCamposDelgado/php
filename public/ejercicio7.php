
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="ejercicio7.php" method="get">
        <input type="number" name="intento"/>
        <input type="submit" value="Enviar"/>
        
    <?php
        $contador = $_GET['contador'];;
        $clave = 1234;
        $intento = $_GET['intento'];
        if ($intento != null) {
            
            if ($contador <= 4 && $intento == $clave) {
                echo "<p>La clave es correcta</p>";
            } else {
                echo "<p>La clave es no valida</p>";
                $contador ++;
                echo "<input type='number' name='contador' hidden value='$contador'/>";
            }
        }
    ?>
        </form>
</body>
</html>