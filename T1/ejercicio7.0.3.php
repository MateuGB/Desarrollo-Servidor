<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Personas</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Personas</h1>
<?php
// Array de arrays: cada elemento es UNA persona (un array asociativo)
$personas = [
    ["nombre" => "Aitor",  "altura" => 182, "email" => "aitor@correo.com"],
    ["nombre" => "Lucía",  "altura" => 165, "email" => "lucia@correo.com"],
    ["nombre" => "Marc",   "altura" => 177, "email" => "marc@correo.com"],
    ["nombre" => "Nerea",  "altura" => 170, "email" => "nerea@correo.com"],
    ["nombre" => "Vicent", "altura" => 188, "email" => "vicent@correo.com"],
];
?>
<table>
  <tr>
    <th>Nombre</th>
    <th>Altura (cm)</th>
    <th>Email</th>
  </tr>
<?php
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>" . $persona["nombre"] . "</td>";
    echo "<td>" . $persona["altura"] . "</td>";
    echo "<td>" . $persona["email"] . "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>