<?php
include("conexion.php");

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: inicio.php");
    exit();
}
?>
<?php


// Comprobar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    echo "Acceso denegado. Por favor, inicie sesión.";
    exit;
}

// Obtener los datos del formulario
$profesor = htmlspecialchars($_POST['profesor']);
$alumno_id = intval($_POST['alumno_id']);
$nota = htmlspecialchars($_POST['nota']);


$sql = "UPDATE notas SET ". $profesor."=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$nota, $alumno_id]);


// Aquí puedes agregar el código para guardar la nota en la base de datos.
// Para este ejemplo, solo mostramos la información recibida.
echo "<h1>Nota Guardada</h1>";
echo "<p>Profesor: " . $profesor . "</p>";
echo "<p>ID del Alumno: " . $alumno_id . "</p>";
echo "<p>Nota: " . $nota . "</p>";
$statement = NULL; 
$pdo = NULL; 
echo $_SESSION['username'];
echo "<br>";
header("Refresh:5; url=listado.php"); 
?>
