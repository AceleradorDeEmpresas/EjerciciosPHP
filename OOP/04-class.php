<?php 
    $sale = new Sale(100, date("Y-m-d"));
    $sale->createInvoice();
    // Clase Sale
    

    class Sale {
        public $total; 
        public $date;

        // Constructor
        public function __construct(int|float $total, string $date) {
            $this->total = $total;
            $this->date = $date;
        }

        public function __destruct() {
            echo "Objeto Sale destruido.";
        }

        // Métodos 
        public function createInvoice() {
            echo "Factura creada con un total de {$this->total} en la fecha {$this->date}.";
        }
    }