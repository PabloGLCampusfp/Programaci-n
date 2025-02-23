<?php
class Circulo {
    public $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

// Crear un objeto de la clase y calcular el área de un círculo con radio 5
$circulo = new Circulo(5);
echo "Área del círculo: " . $circulo->calcularArea() . "\n";
?>
