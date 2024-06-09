<?php
// Iniciar la sesión
session_start();


// Comprobar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    echo "Acceso denegado. Por favor, inicie sesión.";
    exit;
}

// Obtener los datos del alumno y el profesor de la URL
$profesor = htmlspecialchars($_GET['profesor']);
$alumno_id = intval($_GET['alumno_id']);

// Verificar si el profesor autenticado es el mismo que está en la URL
if ($_SESSION['username'] !== 'admin' && $_SESSION['username'] !== strtolower($profesor)) {
    echo "Acceso denegado. No tiene permisos para poner notas para este profesor.";
    exit;
}

// Aquí puedes agregar el código para manejar la inserción de notas en la base de datos.
// Para este ejemplo, solo mostramos la información recibida.
echo "<h1>Poner Nota</h1>";
echo "<p>Profesor: " . $profesor . "</p>";
echo "<p>ID del Alumno: " . $alumno_id . "</p>";

// Formulario para poner la nota
echo "<form method='post' action='guardar_nota.php'>";
echo "<input type='hidden' name='profesor' value='" . $profesor . "'>";
echo "<input type='hidden' name='alumno_id' value='" . $alumno_id . "'>";
echo "<label for='nota'>Nota:</label>";
echo "<input type='text' id='nota' name='nota' required>";
echo "<br>";
echo "<input type='submit' value='Guardar Nota'>";
echo "</form>";
?>
