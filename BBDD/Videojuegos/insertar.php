<?php
  require_once "videojuego.php";

  
  // MYSQL: Borrado y creación de base de datos y tablas



    $pdo=conectaDb();



    $insercion = $pdo->prepare("INSERT INTO videojuego(titulo, genero,precio) VALUES(:titulo, :genero, :precio)");
                 $insercion->bindParam(':titulo', $_REQUEST['titulo']);
                 $insercion->bindParam(':genero', $_REQUEST['genero']);
                 $insercion->bindParam(':precio', $_REQUEST['pvp']);
             

    if(!$insercion->execute()) 
        echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";
    
   


$pdo = null;
header("Location:inicio.php");

