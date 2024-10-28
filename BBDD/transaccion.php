<?php
$host = "localhost";
$nombreBD = "videojuegos";
$usuario = "root";
$password = "";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    

		echo "Conexión realizada con éxito<br>";
		// comenzar la transacción
		$pdo->beginTransaction();	
		$ins = "insert into usuarios(nombre, password, rol) values('Fernando', '33333', 'user')";
		$resul = $pdo->exec($ins);	
		// se repite la consulta
		// falla porque el nombre es unique
		$resul = $pdo->exec($ins);	
		if(!$resul){
			echo "Error: " . print_r($pdo->errorinfo());
			// deshace el primer cambio
			$pdo->rollback();
			echo "<br>Transacción anulada<br>";
		}else{
			// si hubiera ido bien...
			$pdo->commit();
            echo "<br>Transacción ok<br>";
		}	
	} catch (PDOException $e) {
	    echo 'Error al conectar: ' . $e->getMessage();
	} 