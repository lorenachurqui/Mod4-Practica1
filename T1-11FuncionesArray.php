<?php
echo "<h4>11. Funciones arrow con array_map, array_filter y array_reduce:</h4>";
echo "Dado el siguiente vector:";
echo "<pre>";
echo htmlspecialchars('
$productos = [
    [\'nombre\' => \'Laptop\',  \'precio\' => 1200, \'activo\' => true],
    [\'nombre\' => \'Mouse\',   \'precio\' => 25,   \'activo\' => true],
    [\'nombre\' => \'Monitor\', \'precio\' => 300,  \'activo\' => false],
    [\'nombre\' => \'Teclado\', \'precio\' => 80,   \'activo\' => true],
];
');
echo "</pre>";

$productos = [
    ['nombre' => 'Laptop',  'precio' => 1200, 'activo' => true],
    ['nombre' => 'Mouse',   'precio' => 25,   'activo' => true],
    ['nombre' => 'Monitor', 'precio' => 300,  'activo' => false],
    ['nombre' => 'Teclado', 'precio' => 80,   'activo' => true],
];

// a 
$activosMayus = array_map(
    fn($p) => strtoupper($p['nombre']),
    array_filter($productos, fn($p) => $p['activo'])
);

echo "<p><strong>a)</strong> Obtener una lista con el nombre en mayúsculas " .
	"de todos los productos activos:</p>";
echo "<pre>"; print_r($activosMayus); echo "</pre>";

// b. 
$mayorcien = array_filter($productos, fn($p) => $p['precio'] > 100);
echo "<p><strong>b)</strong> Filtrar los productos con precio mayor a 100:</p>";
echo "<pre>"; print_r($mayorcien); echo "</pre>";

// c.
$totalActivos = array_reduce(
    $productos,
    fn($suma, $p) => $p['activo'] ? $suma + $p['precio'] : $suma,
    0
);

echo "<p><strong>c)</strong> Calcular el total de precios de productos activos.</p>";
echo "<p><strong>$$totalActivos</strong></p>";
?>