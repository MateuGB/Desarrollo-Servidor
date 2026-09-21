<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Garaje</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Garaje</h1>
<?php
// 1ª dimensión ASOCIATIVA (clave = matrícula)
// 2ª dimensión NUMÉRICA: [0] marca, [1] modelo, [2] puertas
$coches = [
    "4521KLM" => ["Seat", "Ibiza", 5],
    "111BCD"  => ["Ford", "Focus", 5],
    "7788HJK" => ["Renault", "Clio", 3],
    "2034FGT" => ["Toyota", "Corolla", 5],
];

// ksort ordena por CLAVE (matrícula). sort() perdería las claves
ksort($coches);
?>
<table>
  <tr>
    <th>Matrícula</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Puertas</th>
  </tr>
<?php
// => nos da la clave (matrícula) Y el valor (el array con los datos)
foreach ($coches as $matricula => $datos) {
    echo "<tr>";
    echo "<td>$matricula</td>";
    echo "<td>" . $datos[0] . "</td>";
    echo "<td>" . $datos[1] . "</td>";
    echo "<td>" . $datos[2] . "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>