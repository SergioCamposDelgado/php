
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        for ($i = 0; $i < 10; $i++) {
            echo "El valor de i es " . $i ."<br/>";
        }

        
        echo "<br/>";
        $j = 0;
        while ($j < 10) {
            echo "El valor de j es " . $j ."<br/>";
            $j++;
        }
        echo "<br/>";
        $x = 0;
        do {
            echo "El valor de x es " . $x ."<br/>";
            $x++;
        } while ($x < 10);
    ?>
</body>
</html>