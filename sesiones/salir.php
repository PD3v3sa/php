<?php
session_start();
if (isset($_SESSION['dwes'])) {
  session_destroy();
}
header("Refresh:2; url=notastable.php");
echo "sesion cerrada...";
exit();
?>