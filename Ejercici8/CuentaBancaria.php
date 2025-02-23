<?php

class CuentaBancaria {
    private $titular;
    private $saldo;
    private $tipoDeCuenta;

    public function __construct($titular, $saldo, $tipoDeCuenta) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->tipoDeCuenta = $tipoDeCuenta;
    }

    public function depositar($cantidad) {
        $this->saldo += $cantidad;
    }

    public function retirar($cantidad) {
        if ($cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
        } else {
            echo "Saldo insuficiente.";
        }
    }

    public function mostrarInfo() {
        echo "Titular: {$this->titular}\n";
        echo "Tipo de Cuenta: {$this->tipoDeCuenta}\n";
        echo "Saldo: {$this->saldo}\n";
    }
}

// Ejemplo de uso
$cuenta = new CuentaBancaria("Juan Perez", 1000, "Ahorro");
$cuenta->depositar(500);
$cuenta->retirar(200);
$cuenta->mostrarInfo();
?>
