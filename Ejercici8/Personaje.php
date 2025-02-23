<?php

class Personaje {
    private $nombre;
    private $nivel;
    private $puntosVida;
    private $puntosAtaque;

    public function __construct($nombre, $nivel, $puntosVida, $puntosAtaque) {
        $this->nombre = $nombre;
        $this->nivel = $nivel;
        $this->puntosVida = $puntosVida;
        $this->puntosAtaque = $puntosAtaque;
    }

    public function atacar(Personaje $objetivo) {
        $objetivo->puntosVida -= $this->puntosAtaque;
        if ($objetivo->puntosVida < 0) {
            $objetivo->puntosVida = 0;
        }
    }

    public function curarse() {
        $this->puntosVida += 10; // Curación fija por simplicidad
    }

    public function subirNivel() {
        $this->nivel++;
        $this->puntosAtaque += 5;
        $this->puntosVida += 20;
    }

    public function mostrarInfo() {
        echo "Nombre: {$this->nombre}\n";
        echo "Nivel: {$this->nivel}\n";
        echo "Puntos de Vida: {$this->puntosVida}\n";
        echo "Puntos de Ataque: {$this->puntosAtaque}\n";
    }
}

// Ejemplo de uso
$personaje1 = new Personaje("Guerrero", 1, 100, 15);
$personaje2 = new Personaje("Mago", 1, 80, 20);

$personaje1->atacar($personaje2);
$personaje2->curarse();
$personaje1->subirNivel();

$personaje1->mostrarInfo();
$personaje2->mostrarInfo();
?>
