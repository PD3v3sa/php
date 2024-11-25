<?php
require_once "Models/VideojuegoModel.php";

class VideojuegoController {

    private $videojuegoModel;

    public function __construct() {
        $this->videojuegoModel = new Videojuego();
    }

    public function index() {
        $videojuegos = $this->videojuegoModel->getAll();
        require "Views/listar.php";
    }
 
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $genero = $_POST['genero'];
            $precio = $_POST['precio'];
            $this->videojuegoModel->save($titulo, $genero, $precio);
            header("Location: index.php");
        } else {
            require "views/create.php";
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $genero = $_POST['genero'];
            $precio = $_POST['precio'];
            $this->videojuegoModel->update($id, $titulo, $genero, $precio);
            header("Location: index.php");
        } else {
            $videojuego = $this->videojuegoModel->getById($id);
            require "views/videojuegos/edit.php";
        }
    }

    public function delete($id) {
        $this->videojuegoModel->delete($id);
        header("Location: index.php");
    }

}
