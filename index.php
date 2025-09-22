<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
<!--Escribe un programa que muestre tu horario de clase mediante una tabla, intercalando HTML y PHP-->
</head>
<body>
    <?php
        echo "<table border = '1'>
        <tr> <th> </th> <th> LUNES </th> <th> MARTES </th>  <th> MIERCOLES </th>  <th> JUEVES </th>  <th> VIERNES </th> </tr> 
        <tr> <td>8:15</td> <td>Diseño de Interfaces</td> <td>Prog. Cliente</td> <td>Diseño de Interfaces</td> <td>Inglés</td> <td>Diseño de Interfaces</td></tr>
        <tr> <td>9:15</td> <td>Optativa</td> <td>Prog. Cliente</td> <td>Diseño de Interfaces</td> <td>Inglés</td> <td>Diseño de Interfaces</td> </tr>
        <tr> <td>10:15</td> <td>Optativa</td> <td>IPE</td> <td>IPE</td> <td>Desarrollo Web</td> <td>Prog. Servidor</td></tr>
        <tr> <td>11:15</td> <th colspan = 5> RECREO </th> </tr>
        <tr> <td>11:45</td> <td>Prog. Servidor</td> <td>IPE</td> <td>Prog. Servidor</td> <td>Desarrollo Web</td> <td>Prog. Servidor</td> </tr>
        <tr> <td>12:45</td> <td>Prog. Servidor</td> <td>Proyecto Integrado</td> <td>Prog. Servidor</td> <td>Prog. Cliente</td> <td>Prog. Cliente</td></tr>
        <tr> <td>13:45</td> <td>Prog. Servidor</td> <td>Proyecto Integrado</td> <td>Optativa</td> <td>Prog. Cliente</td> <td>Prog. Cliente</td></tr>
        </table>";

    ?>
</body>
</html>