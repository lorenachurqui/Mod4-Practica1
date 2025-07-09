<?php
function analizarArrayDetallado($array) {
    echo "<h4>4. Análisis de un array de números enteros</h4>";
    echo "<p><strong>Valores asignados:</strong> [" 
		. implode(", ", $array) . "]</p>";
    echo "<h4>— Realizar lo siguiente: —</h4>";
    $mayor = $array[0];
    $posMayor = 0;
    $impares = [];
    $pares = [];
    $posImpares = [];
    $posPares = [];
    $sumaTotal = 0;

    foreach ($array as $i => $val) {
        if ($val > $mayor) {
            $mayor = $val;
            $posMayor = $i;
        }

        if ($val % 2 !== 0) {
            $impares[] = $val;
        } else {
            $pares[] = $val;
        }

        if ($i % 2 !== 0) {
            $posImpares[] = $val;
        } else {
            $posPares[] = $val;
        }
        $sumaTotal += $val;
    }
    $sumaImpares = array_sum($impares);
    $sumaPares = array_sum($pares);
    $sumaPosImpares = array_sum($posImpares);
    $sumaPosPares = array_sum($posPares);
    $promedio = round($sumaTotal / count($array), 2);

    echo "<h4>a) Encontrar en número mayor y su posición.</h4>";
    echo "<p>El número mayor es <strong>$mayor</strong> y está " .
		"en la posición <strong>$posMayor</strong>.</p>";

    echo "<h4>b) La suma de los contenidos impares</h4>";
    echo "<p>[" . implode(", ", $impares) . "]</p>";
    echo "<p>Suma: <strong>$sumaImpares</strong></p>";

    echo "<h4>c) La suma de los contenidos pares</h4>";
    echo "<p>Pares: [" . implode(", ", $pares) . "]</p>";
    echo "<p>Suma: <strong>$sumaPares</strong></p>";

    echo "<h4>d) La suma de contenidos de posiciones impares.</h4>";
    echo "<p>Impares: [" . implode(", ", $posImpares) . "]</p>";
    echo "<p>Suma: <strong>$sumaPosImpares</strong></p>";

    echo "<h4>e) La suma de contenidos de posiciones pares.</h4>";
    echo "<p>Pares: [" . implode(", ", $posPares) . "]</p>";
    echo "<p>Suma: <strong>$sumaPosPares</strong></p>";

    echo "<h4>f) El promedio de la suma de todo el array.</h4>";
    echo "<p>Suma total: <strong>$sumaTotal</strong> | " .
		"Cantidad de elementos: <strong>" . count($array) . "</strong></p>";
    echo "<p>Promedio: <strong>$promedio</strong></p>";
}
$array = [5, 8, 13, 21, 6, 0, 9, 17, 4];
analizarArrayDetallado($array);
?>
