<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Prueba if con 3 notas</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>¿Cuál de las 3 notas es mayor?</h1>
<?php
$nota1 = 6.5;
$nota2 = 8.25;
$nota3 = 7;

echo "<p>Notas: $nota1, $nota2 y $nota3</p>";

// La nota 1 es la mayor si supera (o iguala) a las OTRAS DOS a la vez → &&
if ($nota1 >= $nota2 && $nota1 >= $nota3) {
    echo "<p>La mayor es la nota 1: $nota1</p>";
} elseif ($nota2 >= $nota3) {
    // Si llegamos aquí, la nota 1 NO es la mayor,
    // así que solo hace falta comparar la 2 con la 3
    echo "<p>La mayor es la nota 2: $nota2</p>";
} else {
    echo "<p>La mayor es la nota 3: $nota3</p>";
}
?>
</body>
</html>