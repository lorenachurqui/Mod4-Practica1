<?php
function bc_factorial($n) {
    $res = "1";
    for ($i = 2; $i <= $n; $i++) {
        $res = bcmul($res, $i);
    }
    return $res;
}

function aproximarPiRamanujan($n = 1, $precision = 50) {
    echo "<h4>6. Realice el cálculo de aproximación del valor de PI utilizando la fórmula de Ramanujan</h4>";
    echo "<p><strong>Término utilizado:</strong> n = $n</p>";

    $suma = "0";
    $factor = bcdiv(bcmul("2", bcsqrt("2", $precision), $precision), "9801", $precision);

    for ($k = 0; $k < $n; $k++) {
        $num = bcmul(bc_factorial(4 * $k), (string)(1103 + 26390 * $k));
        $den = bcmul(bcpow(bc_factorial($k), 4, $precision), bcpow("396", 4 * $k, $precision));
        $term = bcdiv($num, $den, $precision);
        $suma = bcadd($suma, $term, $precision);
    }

    $pi_inv = bcmul($factor, $suma, $precision);
    $pi = bcdiv("1", $pi_inv, $precision);

    echo "<p><strong>π ≈</strong> $pi</p>";
}
$n = 2;
aproximarPiRamanujan($n);
?>