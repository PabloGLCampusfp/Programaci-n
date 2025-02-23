<?php

class CuentaBancaria {
    private $titular;
    private $saldo;
    private $tipoCuenta;

    public function __construct($titular, $tipoCuenta) {
        $this->titular = $titular;
        $this->tipoCuenta = $tipoCuenta;
        $this->saldo = 0;
    }

    public function depositar($cantidad) {
        $this->saldo += $cantidad;
    }

    public function retirar($cantidad) {
        if ($this->verificarSaldoSuficiente($cantidad)) {
            $this->saldo -= $cantidad;
        } else {
            echo "Saldo insuficiente.\n";
        }
    }

    private function verificarSaldoSuficiente($cantidad) {
        return $this->saldo >= $cantidad;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
?>
