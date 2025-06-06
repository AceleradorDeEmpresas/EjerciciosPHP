<?php 

    // Array asociativos
    // Los arrays asociativos son una colección de pares clave-valor, donde cada clave es única y se utiliza para acceder a su valor correspondiente.
    $persona = array(
        "nombre" => "Juan",
        "edad" => 30,
        "ciudad" => "Madrid"
    );

    // Imprimir el array asociativo completo
    print_r("*** Imprimir el array asociativo ***");
    print_r($persona);
    // Imprimir un valor específico por su clave 
    print_r("\n\n*** Imprimir un valor específico por su clave ***\n");
    print_r("Nombre: " . $persona["nombre"]);
    print_r("\n");
    // Modifica un valor específico por medio de su clave 
    print_r("*** Modificar un valor específico por medio de su clave ***\n");
    $persona["edad"] = 31;
    print_r("Edad actualizada: " . $persona["edad"]);
    print_r("\n");
    // Agregar un nuevo par clave-valor al array asociativo
    print_r("*** Agregar un nuevo par clave-valor al array asociativo ***\n");
    $persona["profesion"] = "Ingeniero";
    print_r("Nueva profesión: " . $persona["profesion"]);
    print_r("\n");
    // Eliminar un par clave-valor del array asociativo
    print_r("*** Eliminar un par clave-valor del array asociativo ***\n");
    unset($persona["ciudad"]);
    print_r("Ciudad eliminada. Array actual: ");
    print_r($persona);
    print_r("\n");