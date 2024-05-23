<?php
$nombre = $_REQUEST["nombre"];
$apellido =$_REQUEST["apellido"];

    if(empty($nombre)){
      $nombre="Anónimo";
      $apellido="";
    }   
   // Si cambiamos $_GET por $_POST o $_REQUEST, el resultado es el mismo. solo debéis fijaros en la URL.
    echo "Hola $nombre $apellido";
?>