<?php
function concatenarTexto(...$frases) {
    echo "<h4>10. Crea una función concatenarTexto() que reciba múltiples cadenas de texto y las una en una sola, <br>" . 
	"separándolas por un espacio. (Debe utilizar la función que acepte este argumento …args)</h4>";
    echo "<p><strong>Cadena:</strong> " . implode(" | ", $frases) . "</p>";

    $resultado = implode(" ", $frases);

    echo "<p><strong>Resultado:</strong> \"$resultado\"</p>";

    return $resultado;
}
concatenarTexto("Esta", "función", "concatena", "múltiples", "cadenas", "de", "texto.");
?>
