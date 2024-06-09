<?php
session_start();

if (!isset($_SESSION['loginusu'])) {
    header("Location: login.php");
    exit();
}
?>

<nav>
    <a href="index.php">Inicio</a>
    <a href="pag1.php">Página 1</a>
    <a href="pag2.php">Página 2</a>
    <a href="salir.php">Logout</a>
</nav>