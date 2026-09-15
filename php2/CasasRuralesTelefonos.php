<?php
// Nombre del archivo CSV
$nombre_archivo = 'casas_rurales.csv';

// Array para almacenar los datos del CSV
$datos = array();
$fp = fopen($nombre_archivo, "r"); 

while(!feof($fp)) { 
    $linea = fgets($fp); 
    $fila = explode(';', $linea);
    // El teléfono está en el índice 8. Usamos trim() por si tiene espacios en blanco.
    if (!isset($fila[9]) || trim($fila[9]) == '') {
        $datos[] = $fila; // Guardamos la fila si no tiene teléfono
        
       
    }
}


    fclose($fp);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos de Casas Rurales  </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	
	</nav>
	<div class="container">
		<div class="content">
			<h2>Lista de Casas Rurales</h2>
			<hr />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                   <th>id</th>	<th>localidad</th> <th>codigo_postal</th> <th>nombre</th> <th>modalidad</th> <th>categoria</th> <th>tipo_via</th> <th>via</th> <th>numero</th> <th>telefono</th> <th>email</th> <th>web</th> <th>ubicacion</th>

				</tr>
				<?php
				
              
		
					foreach($datos as $dato){
					
					
                        echo "<tr>
							<td>$dato[0]</td>
							<td>$dato[1]</td>
							<td>$dato[2]</td>
                            <td>$dato[3]</td>
                            <td>$dato[4]</td>
							<td>$dato[5]</td>
                            <td>$dato[6]</td>
                            <td>$dato[7]</td>
                            <td>$dato[8]</td>
                            <td>$dato[9]</td>
                            <td>$dato[10]</td>
                            <td>$dato[11]</td>
                            <td>$dato[12]</td>
							</td>
						</tr>";
						
					}
				
				?>
			</table>
			</div>
		</div>
	</div><center>
	<p>&copy; DWES IES Salvador Gadea <?php echo date("Y");?></p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>