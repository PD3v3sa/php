<?php



// MYSQL: Conexión con la base de datos

function conectaDb()
{
    $host = "localhost";
    $nombreBD = "videojuegos";
    $usuario = "root";
    $password = "";


    try{
       
   $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   return $pdo;
    } catch (PDOException $e) {
        print "    <p class=\"aviso\">Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>\n";
        exit;
    }
}

