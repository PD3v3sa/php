<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


<form enctype="multipart/form-data" action="subidaimagen.php"  method="POST">
<div>
  <label for="formFileLg" class="form-label">Subir imAGEN</label>
  <input class="form-control form-control-lg" id="formFileLg" name="archivoEnviado"  type="file">
  <input type="submit" name="btnSubir" value="Subir" />
</div>
    <!--Archivo: <input name="archivoEnviado" type="file" />
    <br />
    <input type="submit" name="btnSubir" value="Subir" />
-->
</form>
<a href="verfotos.php">Ver mis fotos</a><br/>

</body>
</html>
