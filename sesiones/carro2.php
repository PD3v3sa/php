<?php
session_start();

// Definir el array de artículos
$articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
);

// Inicializar el carro de la compra si no está ya inicializado
if (!isset($_SESSION['carro'])) {
    $_SESSION['carro'] = array();
    $_SESSION['total'] = 0;
}

// Procesar la selección de un artículo
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    foreach ($articulos as $articulo) {
        if ($articulo['id'] == $id) {
            // Agregar el artículo al carro
            $_SESSION['carro'][] = $articulo;
            // Actualizar el total
            $_SESSION['total'] += $articulo['precio'];
            break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carro de Compras</title>
</head>
<body>
    <h1>Lista de Artículos</h1>
    <ul>
        <?php foreach ($articulos as $articulo): ?>
            <li><a href="carro2.php?id=<?php echo $articulo['id']; ?>"><?php echo $articulo['nombre']; ?></a> (<?php echo $articulo['precio']; ?> euros)</li>
        <?php endforeach; ?>
    </ul>

    <h2>Carro de Compras</h2>
    <ul>
        <?php foreach ($_SESSION['carro'] as $articulo): ?>
            <li><?php echo $articulo['nombre']; ?> - <?php echo $articulo['precio']; ?> euros</li>
        <?php endforeach; ?>
    </ul>
    <p>Total: <?php echo $_SESSION['total']; ?> euros</p>
</body>
</html>
