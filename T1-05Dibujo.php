<?php
function dibujarArbolNavidad($n) {
    echo "<h4>5. Dado un valor de n, dibuje algo parecido a un arbolito de navidad (sin su base)</h4>";
    echo "<p><strong>Valor asignado:</strong> n = $n</p>";

    echo "<h4>— Procedimiento —</h4>";
    echo "<p>
        El arbolito se forma con filas de asteriscos centrados.<br>
        Cada fila contiene un número impar de asteriscos, aumentando desde 1 hasta (2n−1).<br>
    </p>";

    echo "<pre style='font-family: monospace; line-height:1.5em;'>";

    for ($i = 0; $i < $n; $i++) {
        $espacios = str_repeat("  ", $n - $i - 1);
        $estrellas = str_repeat("* ", 2 * $i + 1);
        echo $espacios . $estrellas . "\n";
    }
// se agrego espacio vacio despues de "* " y "  " para mejorar espaciado entre asteriscos 
    echo "</pre>";
}
dibujarArbolNavidad(7);
?>