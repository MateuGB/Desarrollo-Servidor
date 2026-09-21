<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Currículum</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
// Cada texto existe en 3 versiones. Lo único que cambia es el sufijo: _es, _va, _en
// (Cambia los textos por los tuyos reales)
$estudios_es = "Estudio 1º de Desarrollo de Aplicaciones Web (DAW) en el IES Serpis.";
$estudios_va = "Estudie 1r de Desenvolupament d'Aplicacions Web (DAW) a l'IES Serpis.";
$estudios_en = "I'm in the first year of Web Application Development (DAW) at IES Serpis.";

$idiomas_es = "Hablo castellano, valenciano e inglés.";
$idiomas_va = "Parle castellà, valencià i anglés.";
$idiomas_en = "I speak Spanish, Valencian and English.";

// --- ESPAÑOL ---
$idioma = "es";
$varEstudios = "estudios_" . $idioma;   // $varEstudios vale el TEXTO "estudios_es"
$varIdiomas  = "idiomas_" . $idioma;    // $varIdiomas vale el TEXTO "idiomas_es"
echo "<h2>Español</h2>";
echo "<p>" . $$varEstudios . "</p>";    // $$varEstudios = $estudios_es
echo "<p>" . $$varIdiomas . "</p>";

// --- VALENCIÀ --- (mismo código, solo cambia $idioma)
$idioma = "va";
$varEstudios = "estudios_" . $idioma;
$varIdiomas  = "idiomas_" . $idioma;
echo "<h2>Valencià</h2>";
echo "<p>" . $$varEstudios . "</p>";
echo "<p>" . $$varIdiomas . "</p>";

// --- ENGLISH ---
$idioma = "en";
$varEstudios = "estudios_" . $idioma;
$varIdiomas  = "idiomas_" . $idioma;
echo "<h2>English</h2>";
echo "<p>" . $$varEstudios . "</p>";
echo "<p>" . $$varIdiomas . "</p>";
?>
</body>
</html>