<?php
// Generar un array de números únicos aleatorios entre 100 y 999
$numeros = range(100, 999);
shuffle($numeros);
$numeros = array_slice($numeros, 0, 54);

// Crear el array bidimensional de 6 filas por 9 columnas
$array = array_chunk($numeros, 9);

// Encontrar el valor máximo y su posición
$maxValue = max($numeros);
$maxPos = null;
foreach ($array as $i => $row) {
    if (($j = array_search($maxValue, $row)) !== false) {
        $maxPos = [$i, $j];
        break;
    }
}

// Encontrar el valor mínimo y su posición
$minValue = min($numeros);
$minPos = null;
foreach ($array as $i => $row) {
    if (($j = array_search($minValue, $row)) !== false) {
        $minPos = [$i, $j];
        break;
    }
}

// Mostrar el contenido del array en una tabla HTML
echo '<table border="1" cellpadding="5" cellspacing="0">';
foreach ($array as $i => $row) {
    echo '<tr>';
    foreach ($row as $j => $num) {
        $color = 'black'; // Color por defecto
        if ($j == $maxPos[1]) {
            $color = 'blue'; // Color de la columna del máximo
        }
        if ($i == $minPos[0]) {
            $color = 'green'; // Color de la fila del mínimo
        }
        echo "<td style='color: $color;'>$num</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>
