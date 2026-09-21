<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contadores</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Contadores</h1>

<p>Este contador va del 1 al 100:</p>
<p>
<?php
for ($i = 1; $i <= 100; $i++) {
    echo $i;
    if ($i < 100) {      // coma después de todos MENOS del último
        echo ",";
    }
}
?>
</p>

<p>Este otro va del 10 al 0:</p>
<p>
<?php
$i = 10;                 // 1) inicializar ANTES del bucle
while ($i >= 0) {        // 2) condición
    echo $i;
    if ($i > 0) {        // guion después de todos menos del 0
        echo "-";
    }
    $i--;                // 3) actualizar DENTRO. Sin esto, bucle infinito
}
?>
</p>
</body>
</html>