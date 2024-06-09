<?php
session_start();
if (isset($_SESSION['loginusu']))
    unset($_SESSION['loginusu']);
// También serviría esto:
// $_SESSION = array();
session_destroy();
header("Location: login.php");

?>