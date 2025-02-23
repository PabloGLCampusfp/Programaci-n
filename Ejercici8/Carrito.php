<?php

class Carrito {
    private $productos;

    public function __construct() {
        $this->productos = [];
    }

    public function agregarProducto($nombre, $precio, $cantidad) {
        $this->productos[] = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
    }

    public function quitarProducto($nombre) {
        foreach ($this->productos as $index => $producto) {
            if ($producto['nombre'] === $nombre) {
                unset($this->productos[$index]);
                break;
            }
        }
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto['precio'] * $producto['cantidad'];
        }
        return $total;
    }

    public function mostrarDetalleCarrito() {
        foreach ($this->productos as $producto) {
            echo "Producto: {$producto['nombre']}, Precio: {$producto['precio']}, Cantidad: {$producto['cantidad']}\n";
        }
        echo "Total: {$this->calcularTotal()}\n";
    }
}

// Ejemplo de uso
$carrito = new Carrito();
$carrito->agregarProducto("Manzana", 0.5, 10);
$carrito->agregarProducto("Pan", 1.5, 2);
$carrito->quitarProducto("Pan");
$carrito->mostrarDetalleCarrito();
?>
