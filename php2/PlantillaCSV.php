<?php
$file = 'plantillas.csv';
$atletico = array();


$fp = fopen($file, "r"); 
// Verifica si el archivo existe


    while(!feof($fp)) { 
        $linea = fgets($fp); 
       // $datos[] = str_getcsv($linea);
        $datos[] = explode(',', $linea);

    }
    $header = array_shift($datos);

    foreach ($datos as $row) {
        $atletico[] = array_combine($header, $row);
    
    }
    print_r(value: $atletico);
    
            fclose($fp);
        

     
?>