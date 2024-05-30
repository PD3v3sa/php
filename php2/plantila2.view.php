<?php include('plantilla.php'); ?>
<html>
<head>
<title>Plantilla Atlètic</title>
</head>
<body>
	<h3>
	
 <h2>Plantilla de l'Atlètic de Madrid</h2>
 <table border='1'>
 <tr><th>Dorsal</th><th>Nom</th><th>Apellidos</th><th>Posicion</th></tr>

 <?php
        // Array con los nombres y dorsales de los jugadores
       

        // Iterar sobre el array e imprimir cada jugador en una fila de la tabla
        foreach ($atletico as $jugador) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($jugador["Dorsal"]) . "</td>";
            echo "<td>" . htmlspecialchars($jugador["Nombre"]) . "</td>";
			echo "<td>" . htmlspecialchars($jugador["Apellidos"]) . "</td>";
            echo "<td>" . htmlspecialchars($jugador["Posicion"]) . "</td>";
            echo "</tr>";
        }
        ?>


 </table>
 	</h3>		
</body>
</html>