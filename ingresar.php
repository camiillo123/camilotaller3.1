<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST['nombre']) || empty($_POST['curso']) || !isset($_POST['numero'])) {
        echo "<h2>Error:</h2>";
        echo "<p>Por favor, completa todos los campos del formulario.</p>";
        echo "<a href='../index.html'>Volver al formulario</a>";
        exit;
    }

    
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $curso = htmlspecialchars(trim($_POST['curso']));
    $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);

    
    if ($numero === false) {
        echo "<h2>Error:</h2>";
        echo "<p>El número ingresado no es válido. Por favor, ingresa un número entero.</p>";
        echo "<a href='../index.html'>Volver al formulario</a>";
        exit;
    }

    
    $cubo = $numero * $numero * $numero;

    
    echo "<h2>Resultados:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Curso de Formación: " . $curso . "<br>";
    echo "Cubo del número: " . $cubo . "<br>";


    if ($cubo > 100) {
        echo "<p><strong>Eres muy afortunado</strong></p>";
    }
    
    echo "<br><a href='../index.html'>Volver al formulario</a>";
} else {
    echo "<h2>Error:</h2>";
    echo "<p>Acceso no permitido. Usa el formulario para enviar los datos.</p>";
    echo "<a href='../index.html'>Volver al formulario</a>";
}
?>
