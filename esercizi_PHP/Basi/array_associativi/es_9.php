<?php
    $mesi = [
        1 => "Gennaio",
        2 => "Febbraio",
        5 => "Maggio",
        6 => "Giugno",
        7 => "Luglio",
        8 => "Agosto",
        3 => "Marzo",
        4 => "Aprile",
        9 => "Settembre",
        10 => "Ottobre",
        12 => "Dicembre",
        11 => "Novembre"
    ];
    
    ksort($mesi);

    foreach($mesi as $k => $v){
        echo "$k: $v\n";
    }
?>