<?php 
    // Este es un array con nombres de frutas 
    $frutas = array("Mango", "Manzana", "Pera", "Fresa", "Naranja"); 
    // Imprimir el array completo 
    print_r($frutas);
    print_r("\n\n"); 
    print_r("*** Métodos para trabajar con arrays en PHP  ***");
    print_r("\n");

    // Impprimir el primer elemento del array 
    print_r("*** Imprimir el primer elemento por medio del índice ***\n\n");
    print_r("Primer elemento: " . $frutas[0]);
    // Todos los array inicia en el índice 0. 
    print_r("\n");
    // Conoce la longitud del array 
    print_r("*** Conocer la longitud del array con el método count() ***\n\n");
    print_r(count($frutas));
    print_r("\n");
    // Agregar un elemento al principio del array con el método array_unshift
    print_r("*** Agregar un elemento al principio del array con el método array_unshift() ***\n\n");
    print_r(array_unshift($frutas, "Kiwi"));
    print_r($frutas);
    print_r("\n");
    // Agregar un elemento al final del array con el método array_push()
    print_r("*** Agregar un elemento al final del array con el método array_push() ***\n\n");
    array_push($frutas, "Piña");
    print_r($frutas);
    print_r("\n");
    // Eliminar el primer elemento del array con el método array_shift()
    print_r("*** Eliminar el primer elemento del array con el método array_shift() ***\n\n");
    array_shift($frutas);
    print_r($frutas);
    print_r("\n");
    // Eliminar el último elemento del array con el médoto array_pop()
    print_r("*** Eliminar el último elemento con el método array_pop() ***\n\n");
    array_pop($frutas);
    print_r($frutas);
    print_r("\n");
    // Eliminar un elemento específico con el método unset()
    print_r("*** Eliminar un elemento específico con el método unset() ***\n\n");
    unset($frutas[2]);
    print_r($frutas);
    print_r("\n");
    // Orderna el array con el método sort() Para revertir el orden, se puede usar rsort()
    print_r("*** Ordenar los elementos del array con el método sort() y desordenarlos con el método rsort() ***\n\n");
    sort($frutas);
    print_r($frutas);
    print_r("\n");
    