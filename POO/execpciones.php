<?php

	class DivisionByZero extends exception{
			protected $message = "El segundo argumento es 0";
	}
	
	function dividir($a, $b){
		if ($b==0){
			throw new DivisionByZero;
		}
		return $a/$b;
	}
	try{
		$resul1 = dividir(5, 0);
		echo "Resul 1 $resul1". "<br>";
	}catch(DivisionByZero $e){
		echo "Excepción: ". $e->getMessage(). "<br>";
	}finally{
		echo "Primer finally<br>";		
	}
	
	try{
		$resul2 = dividir(5, 2);
		echo "Resul 2 $resul2". "<br>";
	}catch(DivisionByZero $e){
		echo "Excepción: ". $e->getMessage(). "<br>";
	}finally{
		echo "Segundo finally";		
	}
?>