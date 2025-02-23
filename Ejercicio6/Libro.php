<?php
class Libro {
    public $titulo;
    public $autor;
    public $numeroPaginas;

    public function __construct($titulo, $autor, $numeroPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numeroPaginas = $numeroPaginas;
    }

    public function mostrarInfo() {
        echo "Título: " . $this->titulo . "\n";
        echo "Autor: " . $this->autor . "\n";
        echo "Número de páginas: " . $this->numeroPaginas . "\n";
    }
}

// Crear una instancia de "Libro" y probar el método
$libro = new Libro("1984", "George Orwell", 328);
$libro->mostrarInfo();
?>
