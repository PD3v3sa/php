<?php
/** 
 * Ejercicios DWES
 * 
 */

$ejercicios = array(
	// UNIDAD 2
	array("unidad"=>"2", "categoría"=> "", "ejercicios"=>array(
		array("ejercicio"=>"Ficha personal", "direccion"=>"u2/a2/fichapersonal.php"),
		array("ejercicio"=>"2 Area", "direccion"=>"u2/a2/area.php"),
		array("ejercicio"=>"3 Suma", "direccion"=>"u2/a2/suma.php"),
		array("ejercicio"=>"4 Cálculos con variables", "direccion"=>"u2/a2/calculos.php"),
		array("ejercicio"=>"5 Cálculos con variables 2", "direccion"=>"u2/a2/calculos2.php"),
		array("ejercicio"=>"6 Información de variables", "direccion"=>"u2/a2/ej6contenidovar.php"),
		array("ejercicio"=>"7 Información de variables 2", "direccion"=>"u2/a2/ej7tiposvar.php")
	)),
	// UNIDAD 3 - Estructuras de control
	array("unidad"=>"3", "categoría"=> "Estructuras de control", "ejercicios"=>array(
		array("ejercicio"=>"1 Número mayor", "direccion"=>"u3/estructurascontrol/ej1nmayor.php"),
		array("ejercicio"=>"2 Días mes", "direccion"=>"u3/estructurascontrol/ej2calcdiames.php"),
		array("ejercicio"=>"3 Edad", "direccion"=>"u3/estructurascontrol/ej3edad.php"),
		array("ejercicio"=>"4 Cabecera", "direccion"=>"u3/estructurascontrol/ej4cabecera.php"),
		array("ejercicio"=>"5 Perfiles de usuario", "direccion"=>"u3/estructurascontrol/ej5usuarios.php")
	)),
	// UNIDAD 3 - Bucles
	array("unidad"=>"3", "categoría"=> "Bucles", "ejercicios"=>array(
		array("ejercicio"=>"1 Números del 1 al 10", "direccion"=>"u3/bucles/ej1num110.php"),
		array("ejercicio"=>"2 Números pares", "direccion"=>"u3/bucles/ej2numpares.php"),
		array("ejercicio"=>"3 Tabla de multiplicar", "direccion"=>"u3/bucles/ej3tmultiplicar.php"),
		array("ejercicio"=>"4 Paleta de colores", "direccion"=>"u3/bucles/ej4colores.php"),
		array("ejercicio"=>"5 Calendario", "direccion"=>"u3/bucles/ej5calendario.php")
	)),
	// UNIDAD 3 - Arrays
	array("unidad"=>"3", "categoría"=> "Arrays", "ejercicios"=>array(
		array("ejercicio"=>"0 Comunidades y Casos", "direccion"=>"u3/arrays/ej0comunidades.php"),
		array("ejercicio"=>"3.1 Meses", "direccion"=>"u3/arrays/ej3/ej1meses.php"),
		array("ejercicio"=>"3.2 Tablero", "direccion"=>"u3/arrays/ej3/ej2tablero.php"),
		array("ejercicio"=>"3.3 Notas", "direccion"=>"u3/arrays/ej3/ej3notas.php"),
		array("ejercicio"=>"3.4 Verbos Irregulares", "direccion"=>"u3/arrays/ej3/ej4verbos.php"),
		array("ejercicio"=>"3.5 Países", "direccion"=>"u3/arrays/ej3/ej5paises.php"),
		array("ejercicio"=>"6 Restaurante", "direccion"=>"u3/arrays/ej6restaurante.php"),
		array("ejercicio"=>"7 Calendario", "direccion"=>"u3/bucles/ej5calendario.php"),
		array("ejercicio"=>"8 Ventas", "direccion"=>"u3/arrays/ej8mediaventas.php"),
		array("ejercicio"=>"9 Máximo y media", "direccion"=>"u3/arrays/ej9mayormedia.php"),

	)),
	// UNIDAD 3 - Formularios
	array("unidad"=>"3", "categoría"=> "Formularios", "ejercicios"=>array(
		array("ejercicio"=>"Irregular Verbs!", "direccion"=>"u3/formularios/irregularverbs"),
		array("ejercicio"=>"Formulario con POST", "direccion"=>"u3/formularios/ejemplos/ejemplo1.php"),
		array("ejercicio"=>"Formulario con GET", "direccion"=>"u3/formularios/ejemplos/ejemplo2.php"),
		array("ejercicio"=>"Formulario con validación", "direccion"=>"u3/formularios/ejemplos/ejemplo3.php"),
		array("ejercicio"=>"Formulario Avanzado", "direccion"=>"u3/formularios/ejemplos/ejemplo4.php"),
		array("ejercicio"=>"1 Calendario", "direccion"=>"u3/formularios/ej1calendario.php"),
		array("ejercicio"=>"4 Suma números", "direccion"=>"u3/formularios/ej4sumaNumeros.php")
	)),
	// UNIDAD 3 - Funciones
	array("unidad"=>"3", "categoría"=> "Funciones", "ejercicios"=>array(
		array("ejercicio"=>"Ejemplo 0", "direccion"=>"u3/funciones/ejemplos/ejemplo0.php"),
		array("ejercicio"=>"Ejemplo 1", "direccion"=>"u3/funciones/ejemplos/ejemplo1.php"),
		array("ejercicio"=>"1 DNI", "direccion"=>"u3/funciones/ej1letraDNI.php"),
		array("ejercicio"=>"2 Factorizar", "direccion"=>"u3/funciones/ej2Factorizar.php"),
		array("ejercicio"=>"3 Generar nombre", "direccion"=>"u3/funciones/ej3genNombre.php"),
		array("ejercicio"=>"4 Suma Dígitos", "direccion"=>"u3/funciones/ej4sumaDig.php"),
		array("ejercicio"=>"5 Lista enlaces", "direccion"=>"u3/funciones/ej5listaEnlaces.php")
	)),
	// UNIDAD 4 - Cookies
	array("unidad"=>"4", "categoría"=> "Cookies", "ejercicios"=>array(
		array("ejercicio"=>"1 Cookies", "direccion"=>"u4/cookies/ej1cookies.php"),
		array("ejercicio"=>"3 Formulario", "direccion"=>"u4/cookies/ej3formulario.php")
	)),
	// UNIDAD 4 - Sesiones
	array("unidad"=>"4", "categoría"=> "Sesiones", "ejercicios"=>array(
		array("ejercicio"=>"Ejemplo 0", "direccion"=>"u4/sesiones/ejemplo0.php"),
		array("ejercicio"=>"Ejemplo 1", "direccion"=>"u4/sesiones/ejemplo1.php"),
		array("ejercicio"=>"Sesiones con límite de tiempo", "direccion"=>"u4/sesiones/ejClase/sesiones_ej1.php"),
		array("ejercicio"=>"Autenticación 1", "direccion"=>"u4/sesiones/ejClase2"),
		array("ejercicio"=>"1 Agenda", "direccion"=>"u4/sesiones/ej1agenda"),
		array("ejercicio"=>"2 Notas DWES", "direccion"=>"u4/sesiones/ej2notas"),
		array("ejercicio"=>"Buscaminas", "direccion"=>"u4/sesiones/buscaminas")
	)),
	// UNIDAD 4 - Ficheros
	array("unidad"=>"4", "categoría"=> "Ficheros", "ejercicios"=>array(
		array("ejercicio"=>"Ejemplo 1", "direccion"=>"u4/ficheros/ejemplo1"),
		array("ejercicio"=>"1 Script usuarios", "direccion"=>"u4/ficheros/ej1Usuarios"),
	)),
	// UNIDAD 4 - Ficheros
	array("unidad"=>"1-4", "categoría"=> "Examen Diciembre 2020", "ejercicios"=>array(
		array("ejercicio"=>"Ejercicio 1 - Test Autoescuela", "direccion"=>"examenes/dic2020/ej1"),
		array("ejercicio"=>"Ejercicio 2 - Gestión de multas", "direccion"=>"examenes/dic2020/ej2")
	)),
	// UNIDAD 5 - POO
	array("unidad"=>"5", "categoría"=> "POO", "ejercicios"=>array(
		array("ejercicio"=>"Mascota", "direccion"=>"u5/mascotas_autoload/")
	)),
	// UNIDAD 6 - Bases de Datos
	array("unidad"=>"6", "categoría"=>"Bases de datos", "ejercicios"=>array(
		array("ejercicio"=>"Superhéroes", "direccion"=>"u6/ejemplosClase/porClases/index.php")
	)),
	// UNIDAD Servicios WEB
	array("unidad"=>"7", "categoría"=>"Servicios Web", "ejercicios"=>array(
		array("ejercicio"=>"Superhéroes con AJAX", "direccion"=>"ajax/Superheroes/")
	)),
	// Unidad proyectos
	array("unidad"=>"de proyectos", "categoría"=>"Symblog y Jobeet", "ejercicios"=>array(
		array("ejercicio"=>"Symblog", "direccion"=>"https://symblog-rafacab.herokuapp.com"),
		array("ejercicio"=>"Jobeet", "direccion"=>"https://symblog-rafacab.herokuapp.com") // TODO: Modificar dirección
	)),
);

if (isset($_COOKIE["conteo"])) {
	setcookie("conteo", $_COOKIE['conteo'] + 1, time()+3600*24*365);
} else {
	setcookie("conteo", 1, time()+3600*24*365);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>DWES - Rafa C.</title>
	<meta charset="UTF-8">
	<link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC|Rubik&display=swap" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<h1>Desarrollo Web en Entorno Servidor</h1>
<h3>de Rafa Caballero</h3>

<p><a href="https://github.com/rafacab1/2daw-php-dwes/tree/master/html" target="__blank">Ver en GitHub</a></p>
<br>
<?php

foreach (array_reverse($ejercicios) as $unidad) {
	echo("<h1>Unidad " . $unidad["unidad"] . "</h1>");
	echo("<h3>" . $unidad["categoría"] . "</h3>");
	foreach ($unidad["ejercicios"] as $ejercicio) {
		echo("<p><a href=\"" . $ejercicio["direccion"] . "\" target=\"__blank\">" . $ejercicio["ejercicio"] . "</a></p>");
	}
}

echo ("<br/><p><a href=\"portfoliopruebas/index.php\">Proyecto ejemplo portfolio</a></p>");
echo ("<br/><p>Has visitado este sitio " . $_COOKIE['conteo'] . " veces.</p>");
?>
</body>
</html>