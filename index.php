<?php 

$continuar = true;

while ($continuar) {
    // Pedir el nombre del usuario 
    do {
        $name = readline("Ingrese su nombre: ");
        // Validar que el nombre no esté vacío y que solo contenga letras
        if (empty($name) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $name)) {
            echo "Error: El nombre debe contener solo letras y no puede estar vacío.\n";
            $valid = false;
        } else {
            $valid = true;
        }
    } while (!$valid);
    // Pedir la edad del usuario 
    $edad = readline("Ingrese su edad: ");
    // Evaluar si el usuario es mayor de edad 
    if ($edad >= 18) {
        $mayor = true;
        while ($mayor) {
    echo "Bienvenido al sitio web, $name\n";
    echo "1. Ver horarios\n";
    echo "2. Ver clases\n";
    echo "3. Ver precios\n";
    $opcion = readline("$name, selecciona una opción: ");
    switch ($opcion) {
        case 1:
            horarios($name);
            $opcion = readline("$name, quieres ver más opciones? (s/n)");
            if(strtolower($opcion) == 'n' ){
                $mayor = false;
            }
            break;
        case 2:
            clases($name);
            $opcion = readline("$name, quieres ver más opciones? (s/n)");
            if(strtolower($opcion) == 'n' ){
                $mayor = false;
            }
            break;
        case 3: 
            precios($name);
            $opcion = readline("$name, quieres ver más opciones? (s/n)");
            if(strtolower($opcion) == 'n' ){
                $mayor = false;
            }
            break;
        default:
            echo "Esa opción no existe\n";
            break;
        
    }
        }
    } else {
        echo "Lo siento, debes ser mayor de edad para acceder al menú.\n";
    }
    
    $seguir = readline("¿Quieres ver otras opciones? (s/n)");
    if(strtolower($seguir) == 'n') {
        $continuar = false;
    }
}

function horarios($name) {
    echo "$name, esos son los horarios\n";
    echo "*** Horarios ***\n\n";
    $horarios = [
        "Lunes" => "9:00 AM - 10:00 AM",
        "Martes" => "10:00 AM - 11:00 AM",
        "Miércoles" => "11:00 AM - 12:00 PM",
        "Jueves" => "1:00 PM - 2:00 PM",
        "Viernes" => "2:00 PM - 3:00 PM"
    ];
    foreach ($horarios as $dia => $horario) {
        echo "$dia: $horario\n";
    }
    echo "\n";
}

function clases($name) {
    echo "$name, estas son las clases disponibles\n";
    echo "*** Clases ***\n\n";
    $clases = [
        "Yoga" => "Lunes y Miércoles a las 6:00 PM",
        "Pilates" => "Martes y Jueves a las 7:00 PM",
        "Zumba" => "Viernes a las 5:00 PM"
    ];
    foreach ($clases as $clase => $horario) {
        echo "$clase: $horario\n";
    }
    echo "\n";
}

function precios($name) {
    echo "$name, estos son los precios\n";
    echo "*** Precios ***\n\n";
    $precios = [
        "Yoga" => "$800 por clase",
        "Pilates" => "$400 por clase",
        "Zumba" => "$60 por clase",
        "Abono mensual" => "$1000"
    ];
    foreach ($precios as $clase => $precio) {
        echo "$clase: $precio\n";
    }
    echo "\n";
}

