<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }

    include('conexion.php');

    $username=$_SESSION['username'];

    $statement = $pdo->prepare("SELECT * FROM notas");
    $statement->execute();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>

 <h1>Bienvenido, <?php echo "$username"; ?> !</h1>
<h2>Lista de Alumnos</h2>
  <div class='content'>
  <table class='table table-success table-striped'>
  <tr><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th>

<?php
    if ($username ==='admin' || $username === 'profesor1') {
                echo "<th>Profesor1</th>";
            }
            if ($username ==='admin' || $username === 'profesor2') {
                echo "<th>Profesor2</th>";
            }
                if ($username ==='admin' || $username === 'profesor3') {
                    echo "<th>Profesor3</th>";
                }
                    if ($username ==='admin' || $username === 'tutor') {
                        echo "<th>Tutor</th>";
                    }
?>

 <?php
        while ($result = $statement->fetch()) {
     
            echo "<tr>";
            echo "<td>". htmlspecialchars($result['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($result['apellido1']) . "</td>";
            echo "<td>" . htmlspecialchars($result['apellido2']) . "</td>";
      
            
            if ( $username === 'profesor1') {
                echo "<td><a href='poner_nota.php?profesor=Profesor1&alumno_id=" . $result['id'] . "'>Poner Nota</a></td>";
            }
            if ( $username === 'profesor2') {
                echo "<td><a href='poner_nota.php?profesor=Profesor2&alumno_id=" . $result['id'] . "'>Poner Nota</a></td>";
            }
            if ( $username === 'profesor3') {
                echo "<td><a href='poner_nota.php?profesor=Profesor3&alumno_id=" . $result['id'] . "'>Poner Nota</a></td>";
            }
            if ( $username === 'tutor') {
              echo "<td><a href='poner_nota.php?profesor=Tutor&alumno_id=" . $result['id'] . "'>Poner Nota</a></td>";
            }

            if ($username === 'admin' ) {
              echo "<td>". htmlspecialchars($result['profesor1']) ."</td>";
              echo "<td>". htmlspecialchars($result['profesor2']) ."</td>";
              echo "<td>". htmlspecialchars($result['profesor3']) ."</td>";
              echo "<td>". htmlspecialchars($result['tutor']) ."</td>";
          }
          
            echo "</tr>";
        }
       
    ?>
   </table>
</div>
    <a href="logout.php">Cerrar sesión</a>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
