
<html>
<style type="text/css">
						td, th {border: 1px solid grey; padding: 4px;}
						th {text-align:center; background-color: #67b4b4;}
						table {border: 1px solid black;}
						div {padding: 10px 20px}
						h1 {font-family: sans-serif; font-style: italic; text-transform: capitalize; color: #008000;}
						.bajoDch {float:right; position:absolute; margin-right:0px; margin-bottom:0px; bottom:0px; right:0px;}
						.altoDch1 {color: #00f; float:right; position:absolute; margin-right:0px; margin-top:0px; top:0px; right:0px;}
						.altoDch2 {color: #f00; float:right; position:absolute; margin-right:0px; margin-top:0px; top:0px; right:0px;}
				</style>
    <body>
    <?php	   
     session_start();
    
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

        if( !isset($_SESSION['dato']) )
           $_SESSION['dato'] = array();
        
        
    
    $_SESSION['dato'][]=$_REQUEST["cars"];

    
   $articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20));
    /*

   $pvp=$articulos[$midato-1]['precio'];
   
// Agregamos el nuevo valor al arreglo
    $total=$total+intval($pvp);
     $_SESSION['dato']=$total; 

    for($j=0;$j<=count($array);$j++)
    for($i=0;$i<=count($articulos);$i++){
        if (isset($articulos[$i]["id"]) && isset($array[$j]))
        if($articulos[$i]["id"]==$array[$j]){
            echo $articulos[$i]["nombre"]."<br>";
        }
    }
     
    
     
     
 echo "<br> Total: ".$_SESSION["dato"];
*/ 

$pvp=0;
echo "<ul>";
for($i=0;$i<count($_SESSION["dato"]);$i++){
    $id = $_SESSION["dato"][$i];
    echo "<li>".$articulos[$id-1]['nombre']." ".$articulos[$id-1]['precio'];
    $pvp=$pvp+intval($articulos[$id-1]['precio']);
    
}

    echo "</ul>";
    echo "<br>Total: ".$pvp;

}

    ?>   
    
<div class="bajoDch">
						<!-- Creamos un formulario para enviar sus datos por POST a la misma página -->
						<form name="formulario" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                        <table style="border: 0px;">
                        <tr style="background-color: #8080ff;">
                        <td>
                        <label for="cars">Zapatillas:</label>
</td>
</tr>        
<tr style="background-color: #8080ff;">

                            <td>

                            <select name="cars" id="cars">
                            <option value="1">Zapatillas Nike (60 euros) </option>
                            <option value="2">Sudadera Domyos (15 euros)</option>
                            <option value="3">Pala de pádel Vairo (50 euros)</option>
                            <option value="4">Pelota de baloncesto Molten (20 euros)</option>
                            </select>  
                            <input type="submit" value="Aplicar cambios" /> 

						</form>
                        <tr style="background-color: #8080ff;">
                        <a href=finsesion.php> Salir de la sesion </a>
                        </tr>
                        </table>

				</div>

            <!--ul>

            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=1" />Zapatillas Nike (60 euros) 
            <li> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=2" />Sudadera Domyos (15 euros)
             <li> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=3" />Pala de pádel Vairo (50 euros)
             <li> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=4" />Pelota de baloncesto Molten (20 euros)
            </ul-->   
            <br>
   
    </body>
</html>
