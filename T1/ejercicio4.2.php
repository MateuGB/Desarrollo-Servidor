<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Prueba if</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>¿Qué nota es mayor?</h1>
<?php
$nota1 = 6.5;
$nota2 = 8.25;

echo "<p>Nota 1: $nota1 — Nota 2: $nota2</p>";

if ($nota1 > $nota2) {
    echo "<p>La mayor es la nota 1: $nota1</p>";
} else if ($nota1 < $nota2) {
    echo "<p>La mayor es la nota 2: $nota2</p>";
} else {
    // Si solo pusieras if/else, con notas iguales diría que la mayor es la 2 (falso)
    echo "<p>Las dos notas son iguales</p>";
}
?>
</body>
</html>