<h1>Editar Videojuego</h1>
<form method="POST" action="index.php?action=edit&id=<?= $videojuego['id'] ?>">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="<?= $videojuego['titulo'] ?>" required>
    <br>
    <label for="genero">Género:</label>
    <input type="text" name="genero" value="<?= $videojuego['genero'] ?>" required>
    <br>
    <label for="precio">Precio:</label>
    <input type="number" name="precio" value="<?= $videojuego['precio'] ?>" step="0.01" required>
    <br>
    <button type="submit">Actualizar</button>
</form>
