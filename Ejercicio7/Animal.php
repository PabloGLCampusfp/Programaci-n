<?php
class Animal {
    public $especie;

    public function __construct($especie) {
        $this->especie = $especie;
    }

    public function emitirSonido() {
        echo "El animal emite un sonido.";
    }
}

class Perro extends Animal {
    public $raza;

    public function __construct($especie, $raza) {
        parent::__construct($especie);
        $this->raza = $raza;
    }

    public function emitirSonido() {
        echo "El perro ladra.";
    }
}

// Instanciar un objeto Perro y probar los métodos y propiedades
$perro = new Perro("Canino", "Labrador");
echo "Especie: " . $perro->especie . ", Raza: " . $perro->raza . ". ";
$perro->emitirSonido();
?>
