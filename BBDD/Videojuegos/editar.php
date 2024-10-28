<?php

require_once "videojuego.php";
$pdo=conectaDb();

$insercion = $pdo->prepare("update videojuegos set titulo=:titulo, genero=:genero, precio=:precio where id=:id");
$insercion->bindParam(':id', $_REQUEST['id']);
$insercion->bindParam(':titulo', $_REQUEST['titulo']);
$insercion->bindParam(':genero', $_REQUEST['genero']);
$insercion->bindParam(':precio', $_REQUEST['precio']);




if(!$insercion->execute()) 
echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";


$pdo = null;
header("Refresh:1; url=inicio.php");

echo '<p>En breve le redirigiremos al listado.</p>';