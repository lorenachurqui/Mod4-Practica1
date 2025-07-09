<?php
function procesarTexto($texto, $callback) {
    echo "<h4>8. Crea una función llamada procesarTexto(texto, callback) " .
		"que reciba una cadena de texto y una función de callback</h4>";
    echo "<p>a. La función debe aplicar el callback al texto y retornar el resultado.</p>";
	echo "<p>b. Prueba la función con una función anónima que convierta el texto a mayúsculas.</p><br>";	
  
    echo "<p><strong>Texto original:</strong> \"$texto\"</p>";

    $resultado = $callback($texto);

    echo "<p><strong>Resultado procesado:</strong> \"$resultado\"</p>";

    return $resultado;
}
procesarTexto("Hola mundo!", function($cadena) {
    return strtoupper($cadena);
});
?>
