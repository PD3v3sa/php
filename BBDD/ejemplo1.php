<?php
//print_r(PDO::getAvailableDrivers());

$host = "localhost";
$nombreBD = "videojuegos";
$usuario = "root";
$password = "";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}


/*
$insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio)" .
" VALUES('Fifa 2020', 'Deportes', 40.95)");
$insercion->execute();
//$insercion = NULL;

$titulo="WWII";
$genero="Bélico";
$precio=12.2;

$consulta = "INSERT INTO videojuegos(titulo, genero, precio)" .
            " VALUES(?, ?, ?)";
$insercion = $pdo->prepare($consulta);
$insercion->bindParam (1, $titulo, PDO::PARAM_STR);
$insercion->bindParam (2, $genero, PDO::PARAM_STR);
$insercion->bindParam (3, $precio);

$insercion->execute();

$videojuegos = array ( "Done to Zen", "Belica", 23.6);

*/




//$insercion->execute($videojuegos);

$videojuegos = array(
    array("nombre" => "The Legend of Zelda: Breath of the Wild", "genero" => "Aventura", "precio" => 59.99),
    array("nombre" => "Super Mario Odyssey", "genero" => "Plataformas", "precio" => 49.99),
    array("nombre" => "Red Dead Redemption 2", "genero" => "Acción/Aventura", "precio" => 39.99),
    array("nombre" => "Minecraft", "genero" => "Sandbox", "precio" => 29.99),
    array("nombre" => "Fortnite", "genero" => "Battle Royale", "precio" => 0.00),
    array("nombre" => "Call of Duty: Modern Warfare", "genero" => "FPS", "precio" => 59.99),
    array("nombre" => "Among Us", "genero" => "Party", "precio" => 4.99),
    array("nombre" => "Cyberpunk 2077", "genero" => "RPG", "precio" => 59.99),
    array("nombre" => "Animal Crossing: New Horizons", "genero" => "Simulación", "precio" => 59.99),
    array("nombre" => "The Witcher 3: Wild Hunt", "genero" => "RPG", "precio" => 29.99),
    array("nombre" => "FIFA 21", "genero" => "Deportes", "precio" => 49.99),
    array("nombre" => "NBA 2K21", "genero" => "Deportes", "precio" => 59.99),
    array("nombre" => "Apex Legends", "genero" => "Battle Royale", "precio" => 0.00),
    array("nombre" => "Grand Theft Auto V", "genero" => "Acción/Aventura", "precio" => 29.99),
    array("nombre" => "Halo Infinite", "genero" => "FPS", "precio" => 59.99),
    array("nombre" => "Final Fantasy VII Remake", "genero" => "RPG", "precio" => 59.99),
    array("nombre" => "Resident Evil Village", "genero" => "Horror", "precio" => 59.99),
    array("nombre" => "Fall Guys", "genero" => "Party", "precio" => 19.99),
    array("nombre" => "Doom Eternal", "genero" => "FPS", "precio" => 39.99),
    array("nombre" => "Hades", "genero" => "Roguelike", "precio" => 24.99)
);

// Insertar datos
/*$consulta = "INSERT INTO videojuegos(titulo, genero, precio)" .
            " VALUES(:nombre, :genero, :precio)";
$insercion = $pdo->prepare($consulta);

foreach ($videojuegos as $videojuego) {
    $insercion->bindParam(':nombre', $videojuego['nombre']);
    $insercion->bindParam(':genero', $videojuego['genero']);
    $insercion->bindParam(':precio', $videojuego['precio']);
    $insercion->execute();
}


$juego = array("nombre" => "Asociativos", "genero" => "Estrategia", "precio" => 0);
$insercion->execute($juego);

try {
    $sql = "UPDATE videojuegos SET titulo = :titulo WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['titulo' => 'Asoc.', 'id' => 143]);
    echo "Usuario actualizado con éxito.";
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
}
*/
$input= $_GET['genero'];
var_dump($input);
$consulta = $pdo->prepare("SELECT titulo,genero,precio FROM videojuegos WHERE genero = :genero");// WHERE genero=:genero");
$consulta->bindParam(':genero', $input);
$consulta->execute();
while($registro = $consulta->fetch())
{
    echo $registro['titulo']." ".$registro['genero']." ".$registro['precio']."<br>";
}
$insercion = NULL;
$pdo = NULL;

?>
