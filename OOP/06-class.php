<?php 
    // Propiedades y métodos estáticos
    $sale = new Sale(100, date("Y-m-d"));
    $sale = new Sale(100, date("Y-m-d"));
    $sale = new Sale(100, date("Y-m-d"));
    $sale->createInvoice();
    // Acceder a la propiedad estática fuera de la clase
    echo "Total de ventas: " . Sale::$count . "\n";
    // Invocar el método estático 
    Sale::reset();
    $sale = new Sale(100, date("Y-m-d"));
    // Clase Sale
    

    class Sale {
        public $total; 
        public $date;
        // Propiedad estática
        public static $count;

        // Constructor
        public function __construct(int|float $total, string $date) {
            $this->total = $total;
            $this->date = $date;
            // Acceder a la propiedad estática
            self::$count++;
        }

        // Destructor
        public function __destruct() {
            // echo "Objeto Sale destruido.";
        }

        // Métodos 
        public function createInvoice() {
            echo "Factura creada con un total de {$this->total} en la fecha {$this->date}.";
        }

        // Crear un método estático
        public static function reset() {
            self::$count = 0;
        }
    }