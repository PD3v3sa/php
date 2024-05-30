<?php
// Mostra l'array $_GET
echo "<h2>Contingut de l'array \$_GET</h2>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

// Obtenció de les variables $x i $y des de l'array $_GET
$x = isset($_GET['x']) ? (float)$_GET['x'] : 0;
$y = isset($_GET['y']) ? (float)$_GET['y'] : 0;

// Calcula i mostra la suma, resta, multiplicació i divisió de $x i $y
echo "<h2>Operacions amb $x i $y</h2>";
echo "Suma: " . ($x + $y) . "<br>";
echo "Resta: " . ($x - $y) . "<br>";
echo "Multiplicació: " . ($x * $y) . "<br>";
if ($y != 0) {
    echo "Divisió: " . ($x / $y) . "<br>";
} else {
    echo "Divisió: No es pot dividir per zero.<br>";
}

// Mostra les variables de l'array $_SERVER
echo "<h2>Contingut de l'array \$_SERVER</h2>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// Determina i mostra quin ordinador fa la petició
$client_ip = $_SERVER['REMOTE_ADDR'];
echo "<h2>Quin ordinador fa la petició?</h2>";
echo "Adreça IP del client: $client_ip<br>";

// Mostra en quina variable estan els paràmetres de la petició
echo "<h2>En quina variable estan els paràmetres de la petició?</h2>";
echo "Els paràmetres de la petició estan en l'array \$_GET.<br>";

// Mostra la ruta del lloc web en l'ordinador local
$web_path = $_SERVER['DOCUMENT_ROOT'];
echo "<h2>Quina és la ruta del lloc web en l'ordinador local?</h2>";
echo "La ruta del lloc web en l'ordinador local és: $web_path<br>";
?>
