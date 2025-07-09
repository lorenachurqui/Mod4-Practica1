<?php
function resolverEcuacionSegundoGrado($a, $b, $c) {
    echo "<h4>7. Resolver la ecuación de segundo grado " .
		"(debe considerar también la solución de números complejos):</h4>";
    echo "<p><strong>Forma general:</strong> 𝑎𝑥² + 𝑏𝑥 + 𝑐 = 0</p>";
    echo "<p><strong>Valores asignados:</strong> a = $a, b = $b, c = $c</p>";
    echo "<p><strong>Ecuación específica:</strong> {$a}x² + {$b}x + {$c} = 0</p>";
    echo "<h4>— Procedimiento —</h4>";
    echo "<p>
        Se utiliza la fórmula general para resolver ecuaciones cuadráticas:<br>
        <strong>x = (−b ± √(b² − 4ac)) / 2a</strong><br>
        El valor del discriminante ( D = b^2 − 4ac ) determina el tipo de soluciones:
        <ul>
            <li><strong>D > 0</strong>: Dos soluciones reales distintas</li>
            <li><strong>D = 0</strong>: Una solución real doble</li>
            <li><strong>D < 0</strong>: Dos soluciones complejas conjugadas</li>
        </ul>
    </p>";

    $D = $b ** 2 - 4 * $a * $c;
    echo "<p><strong>Discriminante:</strong> D = $D</p>";

    echo "<h4>— Soluciones —</h4>";

    if ($D > 0) {
        $x1 = (-$b + sqrt($D)) / (2 * $a);
        $x2 = (-$b - sqrt($D)) / (2 * $a);
        echo "<p>Dos soluciones reales distintas:</p>";
        echo "<p>x₁ = " . number_format($x1, 4) . "<br>x₂ = " . number_format($x2, 4) . "</p>";
    } elseif ($D == 0) {
        $x = -$b / (2 * $a);
        echo "<p>Una solución real doble:</p>";
        echo "<p>x = " . number_format($x, 4) . "</p>";
    } else {
        $parteReal = -$b / (2 * $a);
        $parteImaginaria = sqrt(abs($D)) / (2 * $a);
        echo "<p>
            x₁ = " . number_format($parteReal, 4) . " + " . number_format($parteImaginaria, 4) . "i<br>
            x₂ = " . number_format($parteReal, 4) . " − " . number_format($parteImaginaria, 4) . "i
        </p>";
    }
}
//resolverEcuacionSegundoGrado(1, 2, 5);   //  raíces complejas
 resolverEcuacionSegundoGrado(1, -2, 1);  // D = 0 raíz doble
// resolverEcuacionSegundoGrado(1, -3, -4); // D > 0 raíces reales
?>
