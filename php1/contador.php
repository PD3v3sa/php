<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador en PHP</title>
</head>
<body>
    <h1>Contador PHP</h1>

    <!-- Contar del 1 al 100 usando un bucle for -->
    <p>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i < 100) {
                echo $i . ",";
            } else {
                echo $i; // Evita la coma después del último número
            }
        }
        ?>
    </p>

    <!-- Contar de 10 a 0 usando un bucle while -->
    <p>
        <?php
        $j = 10;
        while ($j >= 0) {
            if ($j > 0) {
                echo $j . "-";
            } else {
                echo $j; // Evita el guion después del último número
            }
            $j--;
        }
        ?>
    </p>

</body>
</html>
