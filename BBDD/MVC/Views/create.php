<h1>Agregar Videojuego</h1>
<form method="POST" action="index.php?action=create">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <br>
    <label for="genero">Género:</label>
    <input type="text" name="genero" required>
    <br>
    <label for="precio">Precio:</label>
    <input type="number" name="precio" step="0.01" required>
    <br>
    <button type="submit">Guardar</button>
</form>
