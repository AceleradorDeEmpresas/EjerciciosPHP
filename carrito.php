<?php 

    $carrito = [];
    
    // Agrregar productos al carrito 
    $iniciar = true;
    while ($iniciar) {
        do {
            $count_items = readline("Ingrese la cantidad de productos que desea agregar al carrito: ");
            if (!is_numeric($count_items) || $count_items <= 0) {
                print("Error: Por favor ingrese un número válido mayor a 0\n");
            }
        } while (!is_numeric($count_items) || $count_items <= 0);

        {
            for($i = 1; $i <= $count_items; $i++) {
                $item = readline("Ingrese el producto: ");
                $carrito[] = $item;
            }

            $carrito_con_productos = $carrito;
            print_r("Productos en el carrito: \n\n");
            $index = 1;
            foreach($carrito_con_productos as $producto) {
                print_r($index++. ": " . $producto . "\n\n");
            }

            print("¿Quiere seguir agregando productos? (s/n) ");
            $opt = readline("");
            if(strtolower($opt) == "n") {
                $iniciar = false;
            } else {
                $iniciar = true;
            }
        }

    }