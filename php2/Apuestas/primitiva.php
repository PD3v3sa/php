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
    for ($i=1;$i <= 6; $i++)
		{
		do{
		   $n = selecciona(49);
		}while(estaSelec($num,$n));
		$num[$i]=$n;
		}
    sort($num);
	echo 'Primitiva :';
	muestraVect($num);
	?>		  
	</body>
</html>
