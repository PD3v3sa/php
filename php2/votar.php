<?php


function obtenerVotos(){
	//Abrimos fichero y leemos primera linea
	$fichero=fopen("votos.txt","r");
	$votos=fgets($fichero);
	fclose($fichero);
	return $votos;
}

function aumentarVotos(){
	// Obtenemos votos
	$votos=obtenerVotos();
	$votos=$votos+1;
	// Nos cargamos el fichero introduciendo el nuevo valor de los votos
	$fichero=fopen("votos.txt","w");
	fprintf($fichero,"%s",$votos);
	fclose($fichero);
	return $votos;
}

	$res=aumentarVotos();
	echo($res);	
?> 
