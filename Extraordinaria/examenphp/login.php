
 
<?php
// Iniciar la sesión
session_start();

// Lista de usuarios y contraseñas
$usuarios = [
    'admin' => 'admin',
    'profesor1' => 'profesor1',
    'profesor2' => 'profesor2',
    'profesor3' => 'profesor3',
    'tutor' => 'tutor'
];

// Comprobar si se ha enviado el formulario

    // Obtener los datos del formulario
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    /*
      Verificar si el usuario y la contraseña son "admin"
   if ($username === 'admin' && $password === 'admin') {
    Guardar los datos en variables de sesión
    $_SESSION['username'] = $username;
     */

     // Verificar si el usuario y la contraseña son correctos
   
     if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
        // Guardar los datos en variables de sesión
        $_SESSION['username'] = $username;
        header("Location: listado.php");

       
    
} else {
    // Mostrar un mensaje de error
    echo "Nombre de usuario o contraseña incorrectos.";
    header("Refresh:5; url=inicio.php"); 
}



?>
