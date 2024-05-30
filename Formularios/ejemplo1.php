<?php
/**
 * Hacer formulario
 * 
 */
    $datosPersonales = array("nombre", "apellidos", "email");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo formulario 1</title>
</head>
<body>
    <form action="procesaForm1.php" method="post">
        <?php
        foreach ($datosPersonales as $a) {
            echo("<input type=\"text\" name=\"" . $a . "\" placeholder=\"" . $a . "\" value=\"\" required>");
        }
        ?>
        <input type="submit" name="enviar" value="Send">
    </form>
</body>
</html>