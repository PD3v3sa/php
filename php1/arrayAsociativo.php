<?php

// Rellenar un array de 100 elementos de manera aleatoria con valores 'M' o 'F'
$datos = array();
for ($i = 0; $i < 100; $i++) {
    $datos[] = rand(0, 1) ? 'M' : 'F'; // Si rand() devuelve 1, agrega 'M', de lo contrario 'F'
}

// Recorrer el array y contar cuántos elementos hay de cada valor
$conteo = array(
    'M' => 0,
    'F' => 0
);

foreach ($datos as $valor) {
    $conteo[$valor]++;
}

// Mostrar el resultado por pantalla
echo "Array generado: ";
print_r($datos);
echo "<br><br>";
echo "Cantidad de 'M': " . $conteo['M'] . "<br>";
echo "Cantidad de 'F': " . $conteo['F'];

?>
