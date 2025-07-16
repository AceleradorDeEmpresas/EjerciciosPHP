<?php 

// Clase animal
class Animal {
    // Propiedades 
    public $tipo;
    public $genero;

    // Constructor 
    public function __construct(
        string $tipo, 
        string $genero
    ) {
        $this->tipo = $tipo;
        $this->genero = $genero;
    }

    // Método mostrar animal
    public function animal_tipo() {
        echo "El animal es un: " . $this->tipo . " y es del sexo " . $this->genero;
    }
}

class Perro extends Animal {
    public $sonido;
    public $nombre;
    public $edad;

    // Constructor 
    public function __construct(string $tipo, string $genero, string $sonido, string $nombre, int $edad) {
        // Constructor de la clase padre
        parent::__construct($tipo, $genero);
        $this->sonido = $sonido;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método sonido 
    public function sonido_perro() {
        echo "El perro se llama {$this->nombre} y su sonido es {$this->sonido}\n";
    }

    public function genero() {
        echo "{$this->nombre} es {$this->genero}";
    }
}

// Mostral el tipo de animal y sexo
$animal = new Animal("Perro", "Macho");

// Perro 
$perro = new Perro("Perro", "Macho","Ladrar", "Rex", 5);
$perro->sonido_perro(); 
$perro->genero();

