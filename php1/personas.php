<?php

// Array bidimensional de personas
$personas = array(
    array('nombre' => 'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'),
    array('nombre' => 'Elena', 'altura' => 165, 'email' => 'elena@correo.com'),
    array('nombre' => 'Carlos', 'altura' => 175, 'email' => 'carlos@correo.com'),
    array('nombre' => 'María', 'altura' => 170, 'email' => 'maria@correo.com'),
    array('nombre' => 'Javier', 'altura' => 178, 'email' => 'javier@correo.com')
);

// Mostrar la tabla HTML
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>" . $persona['nombre'] . "</td>";
    echo "<td>" . $persona['altura'] . "</td>";
    echo "<td>" . $persona['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
