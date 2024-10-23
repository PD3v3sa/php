<?php
// Comprobar si la clase Articulo ya ha sido definida
if (!class_exists('Articulo')) {
    // Si no ha sido definida, requiere el archivo y provoca un error fatal si falla
    require_once('class.articulo.php');
}

final class ArticuloRebajado extends Articulo {
    private $rebaja;

    public function __construct($pNombre, $pPrecio, $pRebaja) {
        parent::__construct($pNombre, $pPrecio);
        $this->rebaja = $pRebaja;
    }

    private function calculaDescuento() {
        return ($this->precio * $this->rebaja) / 100;
    }

    public function precioRebajado() {
        return $this->precio - $this->calculaDescuento();
    }

    public function __toString() {
        $cadena = parent::__toString();
        $cadena .= 'La rebaja es: ' . $this->rebaja . ' %<br />';
        $cadena .= 'El descuento es: ' . self::calculaDescuento() . ' &euro;<br />';
        return $cadena;
    }
}

// Crear una instancia de la clase ArticuloRebajado
$articuloRebajado = new ArticuloRebajado('Bicicleta', 352.10, 20);

// Imprimir el objeto
echo $articuloRebajado;

// Imprimir el precio del artículo rebajado
echo "El precio del artículo rebajado es " . $articuloRebajado->precioRebajado() . " &euro;<br />";

// Mostrar la estructura del objeto con var_dump
echo "<pre>";
var_dump($articuloRebajado);
echo "</pre>";
?>
