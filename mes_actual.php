<?php 

    // Este programa no va a decir cual es el mes actual. 

    $meses = array(
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    );

    $mes_actual = date("n"); // Obtiene el número del mes actual (1 - 12) 

    foreach ($meses as $numero => $mes) {
        // Imprimir todos los meses y señalas el mes actual
        if ($numero == $mes_actual) {
            print_r("$mes " . "👉 (Mes actual)");
            print_r("\n");
        } else {
            print_r("$mes");
            print_r("\n");
        }
    }