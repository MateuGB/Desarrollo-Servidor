<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Array asociativo M/F</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Conteo de M y F</h1>
<?php
// 1) Rellenar 100 posiciones con "M" o "F" al azar
$valores = [];
for ($i = 0; $i < 100; $i++) {
    // Ternario: condición ? si_verdad : si_falso. rand(0,1) da 0 o 1
    $valores[] = rand(0, 1) ? "M" : "F";
}

// 2) Contar SIN variables sueltas: el array asociativo es el contador
$conteo = ["M" => 0, "F" => 0];
foreach ($valores as $valor) {
    $conteo[$valor]++;   // si $valor es "M", suma 1 en $conteo["M"]
}

// 3) Mostrar
echo "<p>" . implode(", ", $valores) . "</p>";
foreach ($conteo as $letra => $cantidad) {
    echo "<p>$letra: $cantidad</p>";
}
?>
</body>
</html>