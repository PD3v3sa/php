<?php
function mayor(): int {
    $args = func_get_args();
    if (empty($args)) {
        throw new InvalidArgumentException("Se requiere al menos un argumento.");
    }
    $maxValue = $args[0];
    foreach ($args as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
    }
    return $maxValue;
}
function concatenar(string ...$palabras): string {
    return implode(' ', $palabras);
}

// Ejemplo de uso
echo "El mayor número es: " . mayor(5, 10, 15, 20, 25) . "\n"; // Output: El mayor número es: 25
echo concatenar("Hola", "mundo", "esto", "es", "una", "prueba") . "\n"; // Output: Hola mundo esto es una prueba

?>
