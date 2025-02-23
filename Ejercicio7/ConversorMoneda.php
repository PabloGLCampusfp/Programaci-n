<?php
class ConversorMoneda {
    const FACTOR_DOLAR_EURO = 0.85;
    const FACTOR_EURO_DOLAR = 1.18;

    public function convertirDolaresAEuros($dolares) {
        return $dolares * self::FACTOR_DOLAR_EURO;
    }

    public function convertirEurosADolares($euros) {
        return $euros * self::FACTOR_EURO_DOLAR;
    }
}

// Crear una instancia de la clase y realizar varias conversiones
$conversor = new ConversorMoneda();
echo "100 dólares son " . $conversor->convertirDolaresAEuros(100) . " euros.\n";
echo "100 euros son " . $conversor->convertirEurosADolares(100) . " dólares.\n";
?>
