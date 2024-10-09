<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
           
        }
        </style>
</head>
<body>
    <?php
        $votos=array(500000,300000,150000,50000); //num de votos.
       

        /*
         $escanos[$i][$j] =>  Tabla con  los votos por partido y escaño.
         $valores => array con todos los valores... ,ás fácil de ordenar después.
        */
        
        for($i=1;$i<=7;$i++){
            
            $j=0;
            foreach($votos as $voto){
              
                $escanos[$i][$j]=number_format($voto/$i,0,",","."); 
                $valores[]=number_format($voto/$i,0,",",".");
                $j++;
            }
               
            
        }




rsort($valores);

for($p=0;$p<7;$p++)    
    $total[]=$valores[$p];  // saco los n(escaños) valores más altos.


        echo "<table border=1>";
        echo "<tr><th>A</th><th>B</th><th>C</th><th>D</th></tr>";
// Filas
for ($i = 0; $i<=count($escanos); $i++)
{
    echo "<tr>";
    // Columnas
    for ($x = 0; $x<=$j-1; $x++)
        {
            if(in_array($escanos[$i][$x],$total))
            echo "<td style='background-color:#00FF00'>".$escanos[$i][$x]."</td>";
            else
            echo "<td >".$escanos[$i][$x]."</td>";
        }
        echo "</tr>";
}
echo "</table>";
    ?>
</body>
</html>