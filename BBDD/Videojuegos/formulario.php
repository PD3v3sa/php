<?php
include_once("header.php");
?>
                <div class="row">
                    <div class="col-sm-8"><h2>Modificar <b>Juego</b></h2></div>

                </div>
            </div>
            <?php
             require_once "videojuego.php";
             $pdo=conectaDb();
             $consulta = $pdo->prepare("SELECT * FROM videojuegos where id=:id");
             $consulta->bindParam(':id', $_REQUEST['id']);

 
  $consulta->execute();
  $registro = $consulta->fetch();
      $id=$registro['id'];
      $titol=$registro['titulo'];
      $genero=$registro['genero']; 
      $precio=$registro['precio'];
     echo "<div class='row'><form action='editar.php' method='post'>";

     echo "<div class='col-md-6'><label>Titulo:</label>";
    echo "  <input type='text' name='titulo' id='titulo' class='form-control' maxlength='100' value=$titol ></div>";

    echo "<div class='col-md-6'><label>genero:</label>";
    echo "  <input type='text' name='genero' id='genero' class='form-control' maxlength='100' value=$genero ></div>";

    echo "<div class='col-md-3'><label>Precio:</label>";
    echo "  <input type='text' name='precio' id='precio' class='form-control' maxlength='10' value=$precio ></div>";

    echo "  <input type='hidden' name='id' id='id' class='form-control' maxlength='100' value=$id >";
    echo " <div class='col-md-12 pull-right'><hr><button type='submit' class='btn btn-success'>Guardar datos</button></div></form></div>";


    
  $pdo = null;
            ?>
         
			
        </div>
    </div>     
</body>
</html>