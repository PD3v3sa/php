<?php
// Nombre del archivo CSV
$file = 'casas_rurales.csv';

// Abrir el archivo CSV
if (($handle = fopen($file, 'r')) !== FALSE) {
    $header = fgetcsv($handle, 1000, ';'); // Leer el encabezado
    $casas_validas = [];
    $casas_descartadas = 0;
print_r($handle);

    // Leer cada línea del archivo
    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
        $id = $data[0];
        $localidad = $data[1];
        $nombre = $data[3];
        $telefono = $data[9]; // Columna del teléfono

        // Verificar si el teléfono no es nulo o vacío
        if (!empty($telefono)) {
            $casas_validas[] = [
                'id' => $id,
                'localidad' => $localidad,
                'nombre' => $nombre,
                'telefono' => $telefono
            ];
        } else {
            $casas_descartadas++;
        }
    }

    fclose($handle);

    // Mostrar los resultados
    echo "Casas rurales con teléfono definido:\n";
    foreach ($casas_validas as $casa) {
        echo "ID: {$casa['id']}, Localidad: {$casa['localidad']}, Nombre: {$casa['nombre']}, Teléfono: {$casa['telefono']}\n";
    }

    echo "\nNúmero de casas rurales descartadas por no tener teléfono: $casas_descartadas\n";
}
?>
