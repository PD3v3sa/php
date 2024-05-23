<?php

// Generar un array aleatorio de 33 elementos con números entre 0 y 100
$random_numbers = array();
for ($i = 0; $i < 33; $i++) {
    $random_numbers[] = rand(0, 100);
}

// Calcular el mayor, el menor y la suma de los números
$mayor = max($random_numbers);
$menor = min($random_numbers);
$suma = array_sum($random_numbers);

// Calcular la media
$media = $suma / count($random_numbers);

// Mostrar los resultados
echo "Array generado: ";
print_r($random_numbers);
echo "<br><br>";
echo "El mayor número es: $mayor <br>";
echo "El menor número es: $menor <br>";
echo "La media de los números es: $media";

?>
