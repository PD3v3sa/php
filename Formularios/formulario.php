<!DOCTYPE html>
<html lang="es">
 <head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <h1>Resumen de Información</h1>
    <table border="1">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre y apellidos</td>
            <td><?php echo htmlspecialchars($_POST['nombre']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($_POST['email']); ?></td>
        </tr>
        <tr>
            <td>URL página personal</td>
            <td><?php echo htmlspecialchars($_POST['url']); ?></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><?php echo htmlspecialchars($_POST['sexo']); ?></td>
        </tr>
        <tr>
            <td>Número de convivientes en el domicilio</td>
            <td><?php echo htmlspecialchars($_POST['convivientes']); ?></td>
        </tr>
        <tr>
            <td>Aficiones</td>
            <td>
                <?php 
                if (isset($_POST['aficiones'])) {
                    echo htmlspecialchars(implode(", ", $_POST['aficiones'])); 
                } else {
                    echo "Ninguna";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Menú favorito</td>
            <td>
                <?php 
                if (isset($_POST['menu'])) {
                    echo htmlspecialchars(implode(", ", $_POST['menu'])); 
                } else {
                    echo "Ninguno";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
