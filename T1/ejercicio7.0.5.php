<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Array bidimensional</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Matriz 6 × 9</h1>
<?php
$FILAS = 6;
$COLUMNAS = 9;

// Números distintos: todos del 100 al 999, barajados, y cogemos en orden
$disponibles = range(100, 999);
shuffle($disponibles);

$matriz = [];
$k = 0;
for ($f = 0; $f < $FILAS; $f++) {
    for ($c = 0; $c < $COLUMNAS; $c++) {
        $matriz[$f][$c] = $disponibles[$k];
        $k++;
    }
}

// Máximo (nos interesa su COLUMNA) y mínimo (nos interesa su FILA)
$max = $matriz[0][0];
$colMax = 0;
$min = $matriz[0][0];
$filaMin = 0;
for ($f = 0; $f < $FILAS; $f++) {
    for ($c = 0; $c < $COLUMNAS; $c++) {
        if ($matriz[$f][$c] > $max) {
            $max = $matriz[$f][$c];
            $colMax = $c;
        }
        if ($matriz[$f][$c] < $min) {
            $min = $matriz[$f][$c];
            $filaMin = $f;
        }
    }
}

echo "<p>Máximo: $max (columna en azul). Mínimo: $min (fila en verde).</p>";

echo "<table>";
for ($f = 0; $f < $FILAS; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $COLUMNAS; $c++) {
        // En la celda donde se cruzan, gana el azul porque se comprueba primero
        if ($c == $colMax) {
            $color = "blue";
        } elseif ($f == $filaMin) {
            $color = "green";
        } else {
            $color = "black";
        }
        echo "<td style='color: $color; font-weight: bold'>" . $matriz[$f][$c] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>