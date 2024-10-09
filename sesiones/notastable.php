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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DWES</title>
</head>
<body>


<form method="post" action= "<?php echo "$_SERVER[PHP_SELF]"; ?>" >
   
        <input type="text" placeholder="Nombre alumno" name="nombre"/>
        <input type="number" min="0" max="10" placeholder="Nota 1r trimestre" name="nota1"/>
        <input type="number" min="0" max="10" placeholder="Nota 2n trimestre" name="nota2"/>
        <input type="number" min="0" max="10" placeholder="Nota 3r trimestre" name="nota3"/>
        <input type="submit" name="enviar" value="Añadir"/>
</form>
<?php
    if ($error) {
       echo  "<p>Notas inválidas</p>";
    }
    echo "<table class='table table-striped'>";
    echo "<thead><tr><th scope='col'>Nom</th> <th scope='col'>1r Trimestre</th><th scope='col'>2n Trimestre</th><th scope='col>3r Trimestre</th></tr><th scope='col>Media</th></thead>";
    foreach ($_SESSION['dwes'] as $alumno) {
        echo("<tr>");
        echo("<td>" . $alumno['alumno'] . "</td>" );
            echo("<td> " . $alumno['nota1'] . "</td>");
            echo("<td> " . $alumno['nota2'] . "</td>");
            echo("<td>" . $alumno['nota3'] . "</td>");
            echo("<td> " . ($alumno['nota1'] + $alumno['nota2'] + $alumno['nota3'])/3 . "</td>");
            echo("</tr>");
    }
    echo "</table>";
    echo ("<a href=salir.php>Borrar notas...</a>");
?>
</body>
</html>