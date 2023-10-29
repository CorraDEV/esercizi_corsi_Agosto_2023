<?php
    $studenti = [
        "001" => "Massimo",
        "002" => "Angelo",
        "003" => "Cosimo",
        "004" => "Donato",
        "005" => "Gennaro"
    ];

    asort($studenti);

    foreach ($studenti as $key => $value){
        echo "$key: $value\n";
    }
?>