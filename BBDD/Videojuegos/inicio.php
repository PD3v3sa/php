<?php
include_once("header.php");
?>
   <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Videojuego</b></h2></div>

                </div>
            </div>
			<div class="row">
				<form action="insertar.php" method="post">
				<div class="col-md-6">
					<label>Titulo:</label>
					<input type="text" name="titulo" id="titulo" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Genero:</label>
					<input type="text" name="genero" id="genero" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-3">
					<label>PVP:</label>
					<input type="real"  name="pvp" id="pvp" class='form-control'  required></textarea>
				</div>
			
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>    
	<footer>
	<div class="badge bg-primary text-wrap" style="width: 6rem;">
  This text should wrap.
</div>
</footer> 
</body>
<?php
  include("listar.php");
// require_once "videojuego.php";
// $pdo=conectaDb();
// $consulta = $pdo->prepare("SELECT * FROM videojuego ");
//   echo "<table class='table'><thead>";
//   echo "<tr> <th scope='col'>Nombre</th><th scope='col'>genero</th><th scope='col'>PVP</th><th scope='col'>operaciones</th></tr>";
//   echo "</thead><tbody>";
//   $consulta->execute();
//   while($registro = $consulta->fetch())
//     {
//       $titol=$registro['titulo'];
    
//     echo "<tr><td>".$registro['titulo']."</td><td>".$registro['genero']."</td><td>".$registro['precio'].
//     "</td><td><a href=borrar.php?id=".$registro['id']."><img src='trash-sharp.svg' width='32' height='32'></a>
// 	         <a href=formulario.php?id=".$registro['id']."><img src='create-sharp.svg' width='32' height='32'></a></td>".
//     "</tr>";
//     }
//   echo "</tbody></table>";
//   $pdo = null;
?>
</html>