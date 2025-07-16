<?php
    // Tipado extricto 
    declare(strict_types=1);
    $animal = new Animal("Firulais", 5, "Paseo", 20);
    $animal->seleccionar_servicio("Paseo");

    $animal2 = new Animal("Miau", 3, "Baño", 15);
    $animal2->seleccionar_servicio("Baño");

    // Union types
    class Animal {
        public string $nombre;
        public int $edad;
        public string $servicio;
        // Union type para el precio se usa | para declarar una unión de tipos

        function __construct(
            string $nombre,
            int $edad,
            string $servicio,
        ) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->servicio = $servicio;
        }

        
        // Este método retorna un string
        public function mostrar_datos() : string {
            return "Nombre: {$this->nombre}\n Edad: {$this->edad}\n Servicio: {$this->servicio}\n";
        }

        // Método para seleccionar el tipo de servicio
        public function seleccionar_servicio( $servicio) : void {
            // Array multidimensional para los servicios con costo
            $servicios = array(
                "Paseo" => 50,
                "Baño" => 200,
                "Vacunación" => 100,
                "Corte de pelo" =>300,
                "Limpieza dental" => 150
            );

            // Verificamos si el servicio existe en el array
            if (array_key_exists($servicio, $servicios)) {
                $costo = $servicios[$servicio];
                // Switch para determinar el servicio seleccionado
                foreach($servicios as $key => $value) {
                    // Comprobamos si el servicio seleccionado es igual al servicio del array
                    if ($key === $servicio) {
                        echo "Servicio seleccionado: {$key}\n";
                        echo "Costo del servicio: {$value} pesos\n";
                        echo $this->mostrar_datos();
                    }
                }

            } else {
                echo "El servicio seleccionado no está disponible.\n";
            }

        }
    }