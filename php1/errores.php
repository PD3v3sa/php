<?php
$miLado = -3;
function areaCuadrado($lado){
    if ($lado < 0){
        // Lanzamos una excepción
        throw new Exception ('Debes insertar un número positivo');
    } else {
        return $lado * $lado;
    }
}
//areaCuadrado($miLado);
// Definimos un array con los lados de los cuadrados que queremos calcular
$misLados = array(2, -6, 4);
// Creamos un loop para calcular el área de cada cuadrado
foreach ($misLados as $lado){
    try {
        echo "El área del cuadrado es: " . areaCuadrado($lado) . "<br>";
    } catch (Exception $e) {
        echo 'Ha habido una excepción: ' . $e->getMessage() . "<br>";
    }
}

try
{
    if (!file_exists("fich1.txt"))
    {
        throw new Exception("El fichero de entrada no existe");
    }
    $contenido = file_get_contents("fich1.txt");
    file_put_contents("fich2.txt", $contenido);
} catch (Exception $e) {
    echo 'Se ha producido un error: ' . $e->getMessage();
}
?>