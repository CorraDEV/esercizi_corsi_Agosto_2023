<?php
    $prodotti = [
        "Elettronica" =>[
            ["televisore", 100],
            ["cellulare", 200],
            ["portatile", 500]
        ],
        "Alimentari" =>[
            ["pane", 3],
            ["pizza", 6],
            ["focaccia", 4]
        ],
        "Abbigliamento" =>[
            ["scarpe", 20],
            ["pantaloni", 15],
            ["maglietta", 10]
        ]
    ];

    foreach($prodotti as $k => $rows){
        echo "$k:\n";
        foreach($rows as $column){
            foreach($column as $c){
                echo "$c ";
            }
            echo "\n";
        }
        echo "\n";
    }
?>