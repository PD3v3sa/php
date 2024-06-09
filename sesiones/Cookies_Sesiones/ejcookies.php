<?php
/**
 * 
 * 
 * 
 */

 
 if (isset($_COOKIE["user"])) {
     // Recuperar una cookie
     $cookie = $_COOKIE["user"];
     echo ($_COOKIE["user"]);
 } else {
     // Generar una cookie
    setcookie("user", "Pepe Devesa", time()+1000);
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Cookies</title>
</head>
<body>
<?php

?>
</body>
</html>