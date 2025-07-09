<?php
function verificarPalindromoHTML($numero) {
    $numeroOriginal = $numero;
    $reverso = 0;
    $paso = 1;

    echo "<h4>2. Verificar si un número es palíndromo</h4>";
    echo "<p><strong>Valor ingresado:</strong> $numeroOriginal</p>";


    echo "<h4>— Procedimiento —</h4>";
    echo "<p>
			Un número es palíndromo si se lee igual al derecho que al revés.<br>
			En cada paso, se extrae el último dígito y se construye un nuevo número invertido.<br>
			El proceso continúa hasta que el número original se reduce a 0.
		</p>";

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<thead><tr><th>Paso</th><th>Resto</th><th>Nuevo reverso</th><th>Valor restante</th></tr></thead><tbody>";

    while ($numero > 0) {
        $resto = $numero % 10;
        $reverso = $reverso * 10 + $resto;
        $numero = floor($numero / 10);

        echo "<tr>";
        echo "<td>$paso</td>";
        echo "<td>$resto</td>";
        echo "<td>$reverso</td>";
        echo "<td>$numero</td>";
        echo "</tr>";
        $paso++;
    }

    echo "</tbody></table>";

    if ($reverso == $numeroOriginal) {
        echo "<p><strong>Resultado final:</strong> $numeroOriginal es un número <strong>palíndromo</strong>.</p>";
    } else {
        echo "<p><strong>Resultado final:</strong> $numeroOriginal <strong>no</strong> es un número palíndromo.</p>";
    }
}
verificarPalindromoHTML(12321);
?>
