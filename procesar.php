<?php
$nombre = $_POST['nombre'];
$curso = $_POST['curso'];
$numero = $_POST['numero'];


$cubo = $numero * $numero * $numero;

echo "<h2>Resultados:</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Curso: " . $curso . "<br>";
echo "Cubo del número: " . $cubo . "<br>";


if ($cubo > 100) {
    echo "<p><strong>¡Eres muy afortunado!</strong></p>";
}
?>
