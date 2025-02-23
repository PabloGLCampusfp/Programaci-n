<?php

class Tarea {
    private $nombre;
    private $descripcion;
    private $fechaLimite;
    private $estado;

    public function __construct($nombre, $descripcion, $fechaLimite) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechaLimite = $fechaLimite;
        $this->estado = "pendiente";
    }

    public function marcarComoCompletada() {
        $this->estado = "completada";
    }

    public function editarDescripcion($nuevaDescripcion) {
        $this->descripcion = $nuevaDescripcion;
    }

    public function mostrarTarea() {
        echo "Nombre: {$this->nombre}\n";
        echo "Descripción: {$this->descripcion}\n";
        echo "Fecha Límite: {$this->fechaLimite}\n";
        echo "Estado: {$this->estado}\n";
    }
}

// Ejemplo de uso
$tarea1 = new Tarea("Comprar pan", "Comprar pan en la tienda", "2023-10-10");
$tarea2 = new Tarea("Lavar el coche", "Lavar el coche en el lavadero", "2023-10-11");

$tareas = [$tarea1, $tarea2];

$tareas[0]->marcarComoCompletada();
$tareas[1]->editarDescripcion("Lavar el coche en casa");

foreach ($tareas as $tarea) {
    $tarea->mostrarTarea();
}
?>
