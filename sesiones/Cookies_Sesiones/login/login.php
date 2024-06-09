<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $login_exitoso = false;

    foreach ($usuarios as $linea) {
        list($usu, $pass) = explode(':', $linea);
        if ($usu === $usuario && $pass === $password) {
            $login_exitoso = true;
            break;
        }
    }

    if ($login_exitoso) {
        $_SESSION['loginusu'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        $error = 'El login o la contraseña son incorrectos';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
