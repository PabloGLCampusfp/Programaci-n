<?php
class Rectangulo {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

// Crear un objeto de la clase y calcular el área
$rectangulo = new Rectangulo(10, 5);
echo "El área del rectángulo es: " . $rectangulo->calcularArea();
?>
