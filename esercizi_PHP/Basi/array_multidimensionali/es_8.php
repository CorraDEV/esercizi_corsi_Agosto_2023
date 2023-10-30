<?php
    $prodotti = [
        "Elettronica" => [
            "P01" => "Mouse",
            "P02" => "Tastiera",
            "P03" => "Cuffie"
        ],
        "Abbigliamento" => [
            "P04" => "Felpa",
            "P05" => "Tuta",
            "P06" => "Cappello"
        ]    
    ];

    foreach($prodotti as $keyCat => $cat){                                
        echo "$keyCat:\n";
        foreach($cat as $k => $v){
            echo "$k: $v\n";
        }
        echo "\n";
    }                        
?>