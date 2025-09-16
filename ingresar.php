<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $curso = htmlspecialchars($_POST['curso']);
    $numero = intval($_POST['numero']);
    $cubo = $numero * $numero * $numero;

    echo "<h2>Resultados:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Curso de Formación: " . $curso . "<br>";
    echo "Cubo del número: " . $cubo . "<br>";

    if ($cubo > 100) {
        echo "<p><strong>Eres muy afortunado</strong></p>";
    }
}
?>
