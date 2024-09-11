<!DOCTYPE html>
<html>
<head>
    <title>Coches</title>
</head>
<body>
    <?php
    // Definir un array bidimensional mixto de coches
    $coches = array(
        "111BCD" => array("Ford", "Focus", 5),
        "222XYZ" => array("Toyota", "Corolla", 4),
        "333DEF" => array("Honda", "Civic", 5),
        "444GHI" => array("Volkswagen", "Golf", 3)
    );

    // Mostrar la información de los coches
    echo "<h1>Información de Coches</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th><th>Número de Puertas</th></tr>";

    foreach ($coches as $matricula => $infoCoche) {
        echo "<tr>";
        echo "<td>" . $matricula . "</td>";
        echo "<td>" . $infoCoche[0] . "</td>";
        echo "<td>" . $infoCoche[1] . "</td>";
        echo "<td>" . $infoCoche[2] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>



</body>
</html>