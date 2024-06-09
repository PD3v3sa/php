<?php

// Crear un array para almacenar los números aleatorios
$random_numbers = array();
$elem=0;

// Llenar el array con 50 números aleatorios entre 0 y 99
for ($i = 0; $i < 50; $i++) {

    do{
        $elem=rand(0, 99);

    }while(in_array($elem, $random_numbers));
    
  
        
        $random_numbers[] = $elem;
   
   
}
sort($random_numbers);
// Mostrar los números en una lista desordenada
echo "<ul>";
foreach ($random_numbers as $number) {
    echo "<li>$number</li>";
}
echo "</ul>";

?>