<?php
require_once "Controllers/VideojuegoController.php";

$controller = new VideojuegoController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;


if ($action == 'create') {
    $controller->create();
}elseif ($action == 'delete' && $id) {
    $controller->delete($id);
} else $controller->index();
/*elseif ($action == 'edit' && $id) {
    $controller->edit($id);
} elseif ($action == 'delete' && $id) {
    $controller->delete($id);
} else {
    $controller->index();
}*/
?>
