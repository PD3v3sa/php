<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Información</title>
</head>
<body>
    <h1>Resumen de Información</h1>

    <?php
    // Función para sanitizar y validar el email y la URL
    function sanitizeInput($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $nombre = sanitizeInput($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    $sexo = sanitizeInput($_POST['sexo']);
    $convivientes = filter_var($_POST['convivientes'], FILTER_VALIDATE_INT);

    $aficionesValidas = ['Deporte', 'Música', 'Lectura', 'Viajes'];
    $menuValido = ['Pizza', 'Pasta', 'Sushi', 'Tacos'];

    $aficiones = isset($_POST['aficiones']) ? $_POST['aficiones'] : [];
    $menu = isset($_POST['menu']) ? $_POST['menu'] : [];

    // Validación de aficiones
    foreach ($aficiones as $aficion) {
        if (!in_array($aficion, $aficionesValidas)) {
            die("Error: Afición inválida detectada.");
        }
    }

    // Validación de menú
    foreach ($menu as $item) {
        if (!in_array($item, $menuValido)) {
            die("Error: Elemento del menú inválido detectado.");
        }
    }

    // Validaciones adicionales
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Email inválido.");
    }

    if (!empty($url) && !filter_var($url, FILTER_VALIDATE_URL)) {
        die("Error: URL inválida.");
    }

    if ($convivientes === false || $convivientes < 1) {
        die("Error: Número de convivientes inválido.");
    }
    ?>

    <table border="1">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre y apellidos</td>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>URL página personal</td>
            <td><?php echo $url; ?></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><?php echo $sexo; ?></td>
        </tr>
        <tr>
            <td>Número de convivientes en el domicilio</td>
            <td><?php echo $convivientes; ?></td>
        </tr>
        <tr>
            <td>Aficiones</td>
            <td><?php echo implode(", ", $aficiones); ?></td>
        </tr>
        <tr>
            <td>Menú favorito</td>
            <td><?php echo implode(", ", $menu); ?></td>
        </tr>
    </table>
</body>
</html>
