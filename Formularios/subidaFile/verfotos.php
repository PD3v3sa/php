<?php

$imagenes = scandir("uploads/");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus fotos</title>
</head>
<body>
<?php
    foreach ($imagenes as $foto) {
        if ($foto != "." && $foto != "..") {
            echo "<img src=\"uploads/" . $foto . "\" width=\"500px\" height=\"500px\"></img>";
        }
    }
    header("Refresh:5; url=subirFile.php");
    echo '<p>En breve le redirigiremos a la página principal.</p>';
?>
    
</body>
</html>