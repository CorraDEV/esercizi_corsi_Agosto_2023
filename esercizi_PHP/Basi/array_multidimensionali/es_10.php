<?php
    $negozi = [
        "Milano" => [
            "Negozio1" => "Indirizzo1",
            "Negozio2" => "Indirizzo2",
            "Negozio3" => "Indirizzo3"
        ],
        "Torino" => [
            "Negozio4" => "Indirizzo4",
            "Negozio5" => "Indirizzo5",
            "Negozio6" => "Indirizzo6"
        ],
        "Genova" => [
            "Negozio7" => "Indirizzo7",
            "Negozio8" => "Indirizzo8",
            "Negozio9" => "Indirizzo9"
        ],
    ];

    foreach($negozi as $city => $negozio){                                
        echo "negozi $city:\n";        
        foreach($negozio as $nome => $indirizzo){
            echo "nome: $nome   indirizzo: $indirizzo\n";
        }
        echo "\n";
    }
?>