<?php
/*Datos de conexion a la base de datos*/
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "tfg";

try{
	$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8",$user, $pass);
}catch (PDOException $e) {
    echo $e->getMessage();
    die();
}


?>