<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Array de aleatorios</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>50 números aleatorios</h1>
<?php
$numeros = [];

// while y no for: si sale un repetido no se añade, así que no sabemos
// cuántas vueltas harán falta. Paramos cuando haya 50.
while (count($numeros) < 50) {
    $num = rand(0, 99);
    if (!in_array($num, $numeros)) {   // ¿NO está ya en el array?
        $numeros[] = $num;             // [] vacío = añadir al final
    }
}

echo "<h2>Tal como salieron</h2><ul>";
foreach ($numeros as $n) {
    echo "<li>$n</li>";
}
echo "</ul>";

sort($numeros);   // Ordena de menor a mayor

echo "<h2>Ordenados</h2><ul>";
foreach ($numeros as $n) {
    echo "<li>$n</li>";
}
echo "</ul>";

$mayor = max($numeros);
$menor = min($numeros);
$media = array_sum($numeros) / count($numeros);

echo "<h2>Resultados</h2>";
echo "<p>Mayor: $mayor</p>";
echo "<p>Menor: $menor</p>";
echo "<p>Media: " . number_format($media, 2) . "</p>";
?>
</body>
</html>