<?php 
    $sale = new Sale();
    $sale->total = 100;
    $sale->date = date("Y-m-d");
    $sale->createInvoice();
    

    class Sale {
        public $total; 
        public $date;
        // Métodos 
        public function createInvoice() {
            echo("Se crea la factura");
        }
    }