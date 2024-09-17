<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Untitled Document</title>
	</head>
	<body>
	<?php	
	include_once('loteria.inc');
	$num = array();
	$comple = array();
    for ($i=1;$i <= 6; $i++)
		{
		do{
		   $n = selecciona(50);
		}while(estaSelec($num,$n));
		$num[$i]=$n;
		}
	for ($i=1;$i <= 2; $i++)
		{
		do{
		   $n = selecciona(9);
		}while(estaSelec($comple,$n));
		$comple[$i]=$n;
		}
    sort($num);
    echo 'Euromillones :';
	muestraVect($num);
	echo ' - ';
	muestraVect($comple);
	?>		  
	</body>
</html>
