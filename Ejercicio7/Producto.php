<?php
class Producto {
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrarDetalles() {
        echo "Producto: {$this->nombre}, Precio: {$this->precio}.\n";
    }
}

class Electrodomestico extends Producto {
    public $consumo;

    public function __construct($nombre, $precio, $consumo) {
        parent::__construct($nombre, $precio);
        $this->consumo = $consumo;
    }

    public function mostrarDetalles() {
        echo "Electrodoméstico: {$this->nombre}, Precio: {$this->precio}, Consumo: {$this->consumo}.\n";
    }
}

// Instanciar un Producto y un Electrodoméstico y mostrar sus detalles
$producto = new Producto("Laptop", 1000);
$electrodomestico = new Electrodomestico("Refrigerador", 1500, "200W");

$producto->mostrarDetalles();
$electrodomestico->mostrarDetalles();
?>
