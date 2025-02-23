<?php

class Empleado {
    protected $nombre;
    protected $sueldo;
    protected $aniosExperiencia;

    public function __construct($nombre, $sueldo, $aniosExperiencia) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->aniosExperiencia = $aniosExperiencia;
    }

    public function calcularBonus() {
        return ($this->sueldo * 0.05) * floor($this->aniosExperiencia / 2);
    }

    public function mostrarDetalles() {
        echo "Nombre: {$this->nombre}\n";
        echo "Sueldo: {$this->sueldo}\n";
        echo "Años de Experiencia: {$this->aniosExperiencia}\n";
        echo "Bonus: {$this->calcularBonus()}\n";
    }
}

class Consultor extends Empleado {
    private $horasPorProyecto;

    public function __construct($nombre, $sueldo, $aniosExperiencia, $horasPorProyecto) {
        parent::__construct($nombre, $sueldo, $aniosExperiencia);
        $this->horasPorProyecto = $horasPorProyecto;
    }

    public function calcularBonus() {
        $bonus = parent::calcularBonus();
        if ($this->horasPorProyecto > 100) {
            $bonus += 500; // Bonus adicional por horas de proyecto
        }
        return $bonus;
    }

    public function mostrarDetalles() {
        parent::mostrarDetalles();
        echo "Horas por Proyecto: {$this->horasPorProyecto}\n";
    }
}

// Ejemplo de uso
$empleado = new Empleado("Ana Gomez", 3000, 6);
$consultor = new Consultor("Luis Martinez", 4000, 8, 120);

$empleado->mostrarDetalles();
$consultor->mostrarDetalles();
?>
