<?php

// Datos
$dbhostname = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'videojuegos';

//Creamos la conexion
$connection = mysqli_connect($dbhostname, $dbuser, $dbpassword, $dbname);

//Comprobamos si se ha hecho bien la conexion


// Parametro con el cual recogemos el input
$input= $_GET['genero'];
var_dump($input);
// Definimos consulta a Mariadb
$query = "SELECT id,titulo,genero, precio FROM videojuegos WHERE genero='$input'";

// Lanzamos la consulta
$results = mysqli_query($connection, $query);

// Comprobamos si se ha hecho bien la consulta
if (!$results) {
    echo mysqli_error($connection);
    die();
}

echo "<table>";
echo "<tr>";
echo "  <th align='left'> ID </th>";
echo "  <th align='left'> Producto </th>";
echo "  <th align='left'> Descripcion </th>";
echo "  <th align='left'> precio </th>";
echo "</tr>";

// Obtenemos y mostramos ls resultados de la consulta. Los resultados se almacenan en un array por el cual iteramos
while ($rows = mysqli_fetch_assoc($results)) {

	echo "<tr>";
	echo "<td align='left'> " . $rows['id'] . "</td>";
	echo "<td align='left'> " . $rows['titulo'] . "</td>";
	echo "<td align='left'> " . $rows['genero'] . "</td>";
    echo "<td align='left'> " . $rows['precio'] . "</td>";
	echo "</tr>";
	echo "</table>";
}

?>