<?php
// Nombre del archivo CSV
$file = 'casas_rurales.csv';
$rurales = array();
$fp = fopen($file, "r"); 
// Verifica si el archivo existe

    
    while(!feof($fp)) { 
        $linea = fgets($fp); 

        $datos[] = explode(';', $linea);
    }
    $header = array_shift($datos);
  

    foreach ($datos as $row){
        $rurales[] = array_combine($header, $row);
        
    }
        
    
    print_r($rurales);

fclose($fp);

