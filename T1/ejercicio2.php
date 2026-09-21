<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Área del círculo</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Área del círculo</h1>
<?php
define("PI", 3.14159);   // Las constantes NO llevan $ y no se pueden cambiar luego

$radio = 3.5;
$area = PI * $radio * 2;   // * es "elevado a". Equivale a PI * $radio * $radio

// number_format($numero, 2) redondea y deja exactamente 2 decimales
echo "<p>El área del círculo es " . number_format($area, 2) . "</p>";
// Resultado: 38.48
?>
</body>
</html>