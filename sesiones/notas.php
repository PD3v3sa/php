<?php
/**
 * 2. Crear una pequeña aplicación que permita la gestión
 * académica del módulo de DWES. Interesa almacenar las 
 * notas de cada trimestre y mostrar un informe con la nota media.
 * 
 * @author Rafa Caballero
 */

$nombre;
$nota1 = $nota2 = $nota3 = 0.0;
$error = false;

session_start();
if (!isset($_SESSION['dwes'])) {
    $_SESSION['dwes'] = array();
}
/**
 * $_SESSION['dwes'] structure:
 * array(
 *  array("alumno"=>"Rafa Caballero", "nota1" => "8", "nota2" => "9", "nota3" => "10");
 *  array("alumno"=>"Alumno 2", "nota1" => "7", "nota2" => "6", "nota3" => "9");
 * )
 */

function clearData($cadena) {
    $cadena_limpia = trim($cadena);
    $cadena_limpia = htmlspecialchars($cadena_limpia);
    $cadena_limpia = stripslashes($cadena_limpia);
    return $cadena;
}

if (isset($_POST['enviar'])) {
    $nombre = clearData($_POST['nombre']);
    if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
        $nota1 = floatval(clearData($_POST['nota1']));
        $nota2 = floatval(clearData($_POST['nota2']));
        $nota3 = floatval(clearData($_POST['nota3']));
        $error = false;
        array_push($_SESSION['dwes'], array("alumno" => $nombre, "nota1" => $nota1, "nota2" => $nota2, "nota3" => $nota3));
    } else {
        $error = true;
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta author="Rafa Caballero">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES</title>
</head>
<body>
<?php
    echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
        echo "<input type=\"text\" placeholder=\"Nombre alumno\" name=\"nombre\"/>";
        echo "<input type=\"number\" min=\"0\" max=\"10\" placeholder=\"Nota primer trimestre\" name=\"nota1\"/>";
        echo "<input type=\"number\" min=\"0\" max=\"10\" placeholder=\"Nota segundo trimestre\" name=\"nota2\"/>";
        echo "<input type=\"number\" min=\"0\" max=\"10\" placeholder=\"Nota tercer trimestre\" name=\"nota3\"/>";
        echo "<input type=\"submit\" name=\"enviar\" value=\"Añadir\"/>";
    echo "</form>";

    if ($error) {
        echo "<p>Notas inválidas</p>";
    }

    foreach ($_SESSION['dwes'] as $alumno) {
        echo("<p>" . $alumno['alumno'] . "</p>" );
            echo("<p>Primer trimestre → " . $alumno['nota1'] . "</p>");
            echo("<p>Segundo trimestre → " . $alumno['nota2'] . "</p>");
            echo("<p>Tercer trimestre → " . $alumno['nota3'] . "</p>");
            echo("<p>Media → " . ($alumno['nota1'] + $alumno['nota2'] + $alumno['nota3'])/3 . "</p>");
            echo("<br/>");
    }

    echo ("<a href=salir.php>Borrar notas...</a>");
?>
</body>
</html>