<?php
class Articulo {
    protected $nombre;
    protected $precio;

    public function __construct($pNombre, $pPrecio) {
        $this->nombre = $pNombre;
        $this->precio = $pPrecio;
    }

    public function __toString() {
        $cadena = 'Nombre: ' . $this->nombre . '<br />';
        $cadena .= 'Precio: ' . $this->precio . ' &euro;<br />';
        return $cadena;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($pPrecio) {
        if (is_numeric($pPrecio)) {
            $this->precio = $pPrecio;
        }
    }
}
?>
