<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar que los campos existen y no están vacíos
    if (empty($_POST['nombre']) || empty($_POST['curso']) || !isset($_POST['numero'])) {
        echo "<h2>Error:</h2>";
        echo "<p>Por favor, completa todos los campos del formulario.</p>";
        echo "<a href='index.html'>Volver al formulario</a>";
        exit;
    }

    // Sanitizar y validar entradas
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $curso = htmlspecialchars(trim($_POST['curso']));
    $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);

    // Validar que el número es un entero válido
    if ($numero === false) {
        echo "<h2>Error:</h2>";
        echo "<p>El número ingresado no es válido. Por favor, ingresa un número entero.</p>";
        echo "<a href='index.html'>Volver al formulario</a>";
        exit;
    }

    // Calcular el cubo
    $cubo = $numero * $numero * $numero;

    // Mostrar resultados
    echo "<h2>Resultados:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Curso de Formación: " . $curso . "<br>";
    echo "Cubo del número: " . $cubo . "<br>";

    // Mostrar mensaje si el cubo es mayor a 100
    if ($cubo > 100) {
        echo "<p><strong>Eres muy afortunado</strong></p>";
    }

    // Enlace para volver al formulario
    echo "<br><a href='index.html'>Volver al formulario</a>";
} else {
    // Si no es una solicitud POST, redirigir al formulario
    echo "<h2>Error:</h2>";
    echo "<p>Acceso no permitido. Usa el formulario para enviar los datos.</p>";
    echo "<a href='index.html'>Volver al formulario</a>";
}
?>
