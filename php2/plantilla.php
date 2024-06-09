<?php
// Llegeix el fitxer CSV
$filename = 'plantillas.csv';
$rows = array_map('str_getcsv', file($filename));
$header = array_shift($rows);
$data = array();
foreach ($rows as $row) {
    $data[] = array_combine($header, $row);
}

// Filtra per l'equip 'Atlético de Madrid'
$atletico = array_filter($data, function($player) {
    return $player['Equipo'] === 'Atlético de Madrid';
});

// Ordena per dorsal
usort($atletico, function($a, $b) {
    return (int)$a['Dorsal'] - (int)$b['Dorsal'];
});


include('plantilla.view.php');

?>
