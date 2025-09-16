<?php
// Obtener los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$curso = $_POST['curso'];
$numero = $_POST['numero'];

// Calcular el cubo del número
$cubo = $numero * $numero * $numero;

// Mostrar los resultados
echo "<h2>Resultados:</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Curso: " . $curso . "<br>";
echo "Cubo del número: " . $cubo . "<br>";

// Verificar si el cubo es mayor a 100
if ($cubo > 100) {
    echo "<p><strong>¡Eres muy afortunado!</strong></p>";
}
?>
