<?php
	function multiplicacionRuso($a, $b) {
		$resultado = 0;
		$aOriginal = $a;
		$bOriginal = $b;
		
		echo "<h4>1. Realice la multiplicación de dos números por el método de multiplicación ruso</h4>";
		echo "<p><strong>Valores asignados:</strong> a = $aOriginal, b = $bOriginal</p>";
		echo "<h4>— Procedimiento —</h4>";
		echo "<p>
			<strong>a</strong> se divide entre 2 en cada iteración y <strong>b</strong> se multiplica por 2.<br>
			Si <strong>a</strong> es impar, se suma <strong>b</strong> al total acumulado.<br>
			El proceso continúa hasta que <strong>a</strong> llegue a 1.
			</p>";

		echo "<table border='1' cellpadding='5' cellspacing='0'>";
		echo "<thead><tr><th>a</th><th>b</th><th>¿Se suma?</th><th>Total Acumulado</th></tr></thead><tbody>";

		$a = $aOriginal;
		$b = $bOriginal;
		$acumulado = 0;
		
		while ($a >= 1) {
			$seSuma = ($a % 2 !== 0);
			if ($seSuma) {
				$acumulado += $b;
				}
			echo "<tr>";
			echo "<td>$a</td>";
			echo "<td>$b</td>";
			echo "<td>" . ($seSuma ? "Sí (+$b)" : " ") . "</td>";
			echo "<td>$acumulado</td>";
			echo "</tr>";

			$a = floor($a / 2);
			$b = $b * 2;
		}
		echo "</tbody></table>";
		echo "<p><strong>Resultado final:</strong> $acumulado</p>";
	}
	multiplicacionRuso(13, 79);
?>

