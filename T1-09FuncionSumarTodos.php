<?php
function sumarTodos(...$args) {
    echo "<h4>9. Crea una función llamada sumarTodos() " .
	"que acepte una cantidad ilimitada de números y devuelva su suma.<br>" .
	"(Debe utilizar la función que acepte este argumento …args)</h4>";
    echo "<p><strong>Números recibidos:</strong> " . implode(", ", $args) . "</p>";

    $suma = array_sum($args);

    echo "<p><strong>Suma:</strong> $suma</p>";

    return $suma;
}
sumarTodos(30, 20, 50, 40, 10, 30,20);
?>
