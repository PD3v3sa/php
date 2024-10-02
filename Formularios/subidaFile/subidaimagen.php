<?php
echo ("<a href=\"verfotos.php\">Ver mis fotos</a><br/>");
$fecha = date_create();
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["archivoEnviado"]["name"]);

$extension = end($temp);

if ((($_FILES["archivoEnviado"]["type"] == "image/gif")
    || ($_FILES["archivoEnviado"]["type"] == "image/jpeg")
    || ($_FILES["archivoEnviado"]["type"] == "image/jpg")
    || ($_FILES["archivoEnviado"]["type"] == "image/pjpeg")
    || ($_FILES["archivoEnviado"]["type"] == "image/x-png")
    || ($_FILES["archivoEnviado"]["type"] == "image/png"))
    && ($_FILES["archivoEnviado"]["size"] < 2000000)
    && in_array($extension, $allowedExts))  {
        if ($_FILES["archivoEnviado"]["error"] > 0) {
            echo "Error: " . $_FILES["archivoEnviado"]["error"] . "<br>";
        } else {
            echo "Upload: " . $_FILES["archivoEnviado"]["name"] . "<br>";
            echo "Type: " . $_FILES["archivoEnviado"]["type"] . "<br>";
            echo "Size: " . ($_FILES["archivoEnviado"]["size"] / 1024) . " kB<br>";
            echo "Stored in: " . $_FILES["archivoEnviado"]["tmp_name"];

            if (file_exists("uploads/" . $_FILES["archivoEnviado"]["name"])) {
                echo $_FILES["archivoEnviado"]["name"] . " ya existe. ";
            } else {
                //move_uploaded_file($_FILES["archivoEnviado"]["tmp_name"],"uploads/" . date_timestamp_get($fecha) . $_FILES["archivoEnviado"]["name"]);
                $nombre = $_FILES['archivoEnviado']['name'];
                
             

                move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "uploads/{$nombre}");

                echo "Guardado en in: " . "uploads/" . $_FILES["archivoEnviado"]["name"];
                echo "<img src=\"uploads/" . $nombre . "\" width=\"500px\" height=\"100px\"></img>";

            }
        }
    } else {
        echo "Archivo no válido";
    }
?>