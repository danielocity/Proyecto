<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Escala de Autoestima Rosemberg</title>
    <link href="src/Result.css" rel="stylesheet"/>
</head>
<body>
    <header>Resultados Escala de Autoestima Rosemberg</header>
    <br/>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
        </tr>
        <tr>
            <td class="td">Muy de acuerdo</td>
            <td class="td">De acuerdo</td>
            <td class="td">En desacuerdo</td>
            <td class="td">Muy en desacuerdo</td>
        </tr>
    </table>
    <br/>
    <table>
        <tr>
            <td>Suma Total</td>
            <td colspan="2" id="checksum" class="datos"><?php echo $_GET['sum'] ?></td>
            <td colspan="2" id="boton"><button onclick="window.location.href='index.html'">Regresar</button></td>
        </tr>
    </table>
    <br/>
    <p>
        Interpretaci&oacute;n: <br/>
        De los &iacute;tems 1 al 5, las respuestas A a D se punt&uacute;an de 4 a 1.<br/>
        De los &iacute;tems del 6 al 10, las respuestas A a D se punt&uacute;an de 1 a 4.<br/>
    </p>
    <?php
        // Obtener la suma enviada por el formulario
        $sum = $_GET['sum'];

        // Determinar el rango de autoestima según la suma
        $rango = "";
        if ($sum >= 30) {
            $rango = "De 30 a 40 puntos: Autoestima elevada. Considerada como autoestima normal.<br/>";
        }
        elseif ($sum >= 26 && $sum <= 29) {
            $rango = "De 26 a 29 puntos: Autoestima media. No presenta problemas de autoestima graves, pero es conveniente mejorarla.<br/>";
        }
        else{
            $rango = "Menos de 25 puntos: Autoestima baja. Existen problemas significativos de autoestima.<br/>";
        } 

        // Mostrar los resultados
        echo "<p id='autoestima'>Tu rango de autoestima es: $rango</p>";
    ?>
    <br/>
</body>
</html>
