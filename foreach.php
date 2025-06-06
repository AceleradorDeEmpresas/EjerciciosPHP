<?php 
    // Foreach nos ayudar a recorrer un array o un objeto de manera sencilla y eficiente. 

    $nombres = array("Juan", "María", "Pedro", "Ana");
    // Imprimir el array completo
    print_r("*** Imprimir el array completo ***\n");
    print_r($nombres);
    print_r("\n"); 

    // Recorrer el array con foreach 
    print_r("*** Recorrer el array con foreach ***\n");
    foreach ($nombres as $nombre) {
        print_r("Nombre: " . $nombre . "\n");
    }
    print_r("\n");

    // Ejemplo de array asociativo 
    $cerveza = array(
        "nombre" => "Cerveza Artesanal",
        "tipo" => "IPA",
        "alcohol" => 6.5,
        "precio" => 3.50
    );
    // Imprimir el array asociativo completo
    print_r("*** Imprimir el array asociativo completo ***\n"); 
    print_r($cerveza);
    print_r("\n");
    // Recorrer el array asociativo con foreach
    print_r("*** Recorrer el array asociativo con foreach ***\n");
    foreach ($cerveza as $clave => $valor) {
        print_r("Clave: " . $clave . ", Valor: " . $valor . "\n");
    }
    print_r("\n");