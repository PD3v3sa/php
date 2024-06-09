<?php
/**
 * Formulario de login con checkbox para recordar el usuario y
 * la contraseña
 * 
 */

 session_start();
 if (!isset($_SESSION['cookieEnabled'])) {
     $_SESSION['cookieEnabled'] = false;
 }

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
    if ($_POST["recordar"] == "on") {
        $_SESSION['cookieEnabled'] = true;
        echo "IN";
        if (isset($_POST["user"])) {
            setcookie("user", $_POST["user"], time()+1000);
        }

        if (isset($_POST["pass"])) {
            setcookie("pass", $_POST["pass"], time()+1000);
        }
    } elseif ($_POST["recordar"] == "") {
        setcookie("user", $_COOKIE["user"], time()-1000);
        setcookie("pass", $_COOKIE["pass"], time()-1000);
        $_SESSION['cookieEnabled'] = false;
    }

 }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Formulario</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
        <?php
         if ($_SESSION['cookieEnabled']) {
        ?>
            <input type="text" name="user" placeholder="Usuario" value="<?php  echo $_COOKIE["user"] ?> ">
            <input type="password" name="pass" placeholder="contraseña" value="<?php echo $_COOKIE["pass"] ?> ">
            <input type="checkbox" name="recordar" value="on">
        <?php
         } else{
        ?>
        <input type="text" name="user" placeholder="Usuario">
            <input type="password" name="pass" placeholder="contraseña" >
            <input type="checkbox" name="recordar">
        <?php
         } 
        ?>
        <label for="recordar">Recordar</label><br/>
        <input type="submit" name="enviar" value="Iniciar sesión">
    
    </form>

</body>
</html>