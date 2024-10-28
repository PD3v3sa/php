<?php

require_once "videojuego.php";
$pdo=conectaDb();
echo $_REQUEST['titulo'];
$insercion = $pdo->prepare("delete from videojuego where id=:id");
$insercion->bindParam(':id', $_REQUEST['id']);



if(!$insercion->execute()) 
echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";


$pdo = null;
header("Location:inicio.php");

echo '<p>En breve le redirigiremos al listado.</p>';