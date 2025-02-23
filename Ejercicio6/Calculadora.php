<?php
class Calculadora {

    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            return "Error: División por cero.";
        }
        return $a / $b;
    }
}

// Crear una instancia de la clase y realizar varias operaciones matemáticas
$calculadora = new Calculadora();
echo "Suma: " . $calculadora->sumar(10, 5) . "\n";
echo "Resta: " . $calculadora->restar(10, 5) . "\n";
echo "Multiplicación: " . $calculadora->multiplicar(10, 5) . "\n";
echo "División: " . $calculadora->dividir(10, 5) . "\n";
echo "División por cero: " . $calculadora->dividir(10, 0) . "\n";
?>
