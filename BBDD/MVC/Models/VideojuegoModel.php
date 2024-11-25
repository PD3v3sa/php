<?php

require_once "Config/Conexion.php";

class Videojuego 
{
    private $pdo;
    public function __construct() {
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }
// a partir de aquí iran todas los métodos CRUD
public function getAll()
{
    try{
        $query = "SELECT * FROM videojuegos";
        $registro = $this->pdo->prepare($query);
        $registro->execute();
        return  $registro->fetchAll();//$registro->fetchAll();
    }catch (PDOException $e)
    {
        die($e->getMessage());
    }
}
public function getById($id)
{
    try{
        $query = "SELECT * FROM videojuegos WHERE id = $id";
        $registro = $this->pdo->prepare($query);
        $registro->execute();
        return $registro->fetch();
    }catch (PDOException $e)
    {
        die($e->getMessage());
    }
}
public function delete($d)
{
    try{
        $insercion = $this->pdo->prepare("delete from videojuegos where
        id=:id");
        $insercion->bindParam(':id', $d);
        return $insercion->execute();
    }catch(PDOException $e)
    {
        die($e->getMessage());
    }
}
public function edit($i,$t,$g,$p)
{
    try{
        $insercion = $this->pdo->prepare("update videojuegos set titulo=:titulo, genero=:genero, precio=:precio where id=:id");
        $insercion->bindParam(':id', $i);
        $insercion->bindParam(':titulo', $t);
        $insercion->bindParam(':genero', $g);
        $insercion->bindParam(':precio', $p);
        $insercion->execute();
        return true;
    }catch (PDOException $e)
    {
        die($e->getMessage());
    }
}
public function save($t,$g,$p)
{
    try{
        $insercion = $this->pdo->prepare("INSERT INTO videojuegos(titulo,genero,precio) VALUES(:titulo, :genero, :precio)");
        $insercion->bindParam(':titulo', $t);
        $insercion->bindParam(':genero', $g);
        $insercion->bindParam(':precio', $p);
        return $insercion->execute();
   
    }catch (PDOException $e)
    {
        die($e->getMessage());
    }
}
public function update($id, $titulo, $genero, $precio) {
    $query = "UPDATE videojuegos SET titulo = :titulo, genero = :genero, precio = :precio WHERE id = :id";
    $insercion = $this->pdo->prepare($query);
    $insercion->bindParam(":id", $id);
    $insercion->bindParam(":titulo", $titulo);
    $insercion->bindParam(":genero", $genero);
    $insercion->bindParam(":precio", $precio);
    return $insercion->execute();
}
}