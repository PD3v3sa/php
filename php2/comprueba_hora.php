<?php
function esHoraValida(string $hora): bool {
    // Separar la cadena en horas, minutos y segundos
    $partes = explode(':', $hora);
    
    // Verificar que se han obtenido exactamente tres partes
    if (count($partes) !== 3) {
        return false;
    }

    list($horas, $minutos, $segundos) = $partes;

    // Verificar que cada parte es un número y está en el rango válido
    if (is_numeric($horas) && is_numeric($minutos) && is_numeric($segundos)) {
        if ($horas >= 0 && $horas < 24 && $minutos >= 0 && $minutos < 60 && $segundos >= 0 && $segundos < 60) {
            return true;
        }
    }

    return false;
}

// Ejemplos de uso
$hora1 = "21:30:12";
$hora2 = "12:63:11";

if (esHoraValida($hora1)) {
    echo "La hora $hora1 es válida.\n";
} else {
    echo "La hora $hora1 no es válida.\n";
}

if (esHoraValida($hora2)) {
    echo "La hora $hora2 es válida.\n";
} else {
    echo "La hora $hora2 no es válida.\n";
}
?>
