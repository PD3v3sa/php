<?php
$parametres_connexio = 'mysql:host=localhost;dbname=test';
$usuari = 'root';
$passwd = '';
try {
		$bd = new PDO($parametres_connexio,$usuari,$passwd);
		echo "Connexio realitzada correctament!!<br/>";
		$sql = "SELECT producte, unitats  FROM stock";
		$productes =  $bd->query($sql);
		echo $productes->rowCount()." elements<br/>";
		echo '<ul>';
		//dues maneres
		
		foreach ($productes->fetchAll() as $producte){
			echo '<li>'.$producte['producte'].' '.$producte['unitats'].'</li>';
		}
		
		echo "<br> Objetos...";

		foreach ($productes->fetchAll(PDO::FETCH_OBJ) as $producte){
			echo '<li>'.$producte->producte.' '.$producte->unitats.'</li>';
		}
		echo '</ul>';
	} catch (PDOException $e) {
    echo 'Error con la base de datos: ' . $e->getMessage();
	} 