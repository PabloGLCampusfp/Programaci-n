<?php

require_once 'CuentaBancaria.php';

$cuenta = new CuentaBancaria("Juan Perez", "Ahorro");
$cuenta.depositar(1000);
$cuenta.retirar(500);
$cuenta.retirar(600);

echo "Saldo final: " . $cuenta->getSaldo() . "\n";

?>
