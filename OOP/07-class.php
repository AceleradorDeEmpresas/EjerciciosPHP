<?php
    // Tipado extricto 
    declare(strict_types=1);


    // Union types
    class Animal {
        public string $nombre;
        public int $edad;
        public string $servicio;
        // Union type para el precio se usa | para declarar una unión de tipos
        public int|float $precio;

        function __construct() {

        }
    }