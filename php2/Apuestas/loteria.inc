<?php 
function selecciona($fin)
{
    return (rand(1,$fin));
}

function estaSelec($vect,$num)
{
$esta = false;
foreach($vect as $valor)
		 {
		    if ($valor === $num)
		       $esta = true;
		 }
return($esta);
}

function muestraVect($vect)
{
foreach($vect as $valor)
		 {
		    echo ' '.$valor;
		 }
}
?>
