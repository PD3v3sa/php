<?php
include("team.php");
include("player.php");

function loadTeamFromCsv($filePath, $teamName) {
    $team = new Team($teamName);
    if (($handle = fopen($filePath, "r")) !== FALSE) {
        $header = fgetcsv($handle, 1000, ",");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[1] === $teamName) {
                $player = new Player(
                    $data[4] . " " . $data[5],  // Nom complet
                    $data[6],  // Data de naixement
                    $data[9],  // País
                    $data[10], // Dorsal
                    $data[11], // Posició
                    $data[15], // Gols
                    $data[12], // Partits jugats
                    $data[14], // Minuts jugats
                    $data[16], // Targetes grogues
                    $data[17]  // Targetes vermelles
                );
                $team->signPlayer($player);
            }
        }
        fclose($handle);
    }
    return $team;
}

$filePath = 'plantillas.csv';
$teamName = 'Atlético de Madrid';
$team = loadTeamFromCsv($filePath, $teamName);
$team->render();
