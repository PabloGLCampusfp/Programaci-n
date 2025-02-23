<?php
class Persona {
    public $nombre;
    public $edad;
    public $genero;

    public function __construct($nombre, $edad, $genero) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
    }

    public function presentar() {
        echo "Hola, mi nombre es {$this->nombre}, tengo {$this->edad} años y soy {$this->genero}.";
    }
}

// Crear una instancia de Persona y probar el método presentar
$persona = new Persona("Juan", 30, "masculino");
$persona->presentar();
?>
