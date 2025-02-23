<?php
class Empleado {
    public $nombre;
    public $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function mostrarDetalles() {
        echo "Nombre: " . $this->nombre . "\n";
        echo "Sueldo: " . $this->sueldo . "\n";
    }
}

class Gerente extends Empleado {
    public $departamento;

    public function __construct($nombre, $sueldo, $departamento) {
        parent::__construct($nombre, $sueldo);
        $this->departamento = $departamento;
    }

    public function mostrarDetalles() {
        parent::mostrarDetalles();
        echo "Departamento: " . $this->departamento . "\n";
    }
}

// Instanciar un "Gerente" y un "Empleado" y mostrar sus detalles
$empleado = new Empleado("Juan Pérez", 3000);
$gerente = new Gerente("Ana Gómez", 5000, "Ventas");

$empleado->mostrarDetalles();
$gerente->mostrarDetalles();
?>
