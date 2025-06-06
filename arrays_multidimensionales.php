<?php 
    // Arrays multidimentsionales

    $beers = [
        [
            "name" => "Cerveza Artesanal",
            "type" => "IPA",
            "alcohol" => 6.5,
            "price" => 3.50
        ],
        [
            "name" => "Cerveza Lager",
            "type" => "Lager",
            "alcohol" => 5.0,
            "price" => 2.80
        ],
        [
            "name" => "Cerveza Stout",
            "type" => "Stout",
            "alcohol" => 7.0,
            "price" => 4.00
        ],
        [
            "name" => "Cerveza Colimita",
            "type" => "Pale Ale",
            "alcohol" => 7.0,
            "price" => 4.00
        ]
    ];
        
    // Imprimir el array multidimensional completo
    print_r("*** Imprimir el array multidimensional completo ***\n");
    print_r($beers);
    print_r("\n");

    // Recorrer el array multidimensional con foreach
    print_r("*** Recorrer el array multidimensional con foreach ***\n");
    foreach($beers as $beer) {
        foreach($beer as $key => $value) {
            print_r("Clave: " . $key . " Valor: " . $value . "\n");
        }
    }

    print_r("\n");
    print_r("\n");

    foreach ($beers as $beer => $key ) {
        // Imprimir el nombre de la cerveza
        print_r("Nombre de la cerveza: " . $key['name'] . "\n");
    }


    // array_merge() combina dos o más arrays en uno solo
    // Eemplo de uso de array_merge() con arrays multidimensionales
