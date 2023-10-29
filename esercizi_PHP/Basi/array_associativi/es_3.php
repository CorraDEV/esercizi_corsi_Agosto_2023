<?php
    $prodotti = [
        "latte" => 3,
        "televisore" => 199.99,
        "formaggio" => 5,
        "pizza" => 6.5,        
        "cellulare" => 100
    ];

    foreach($prodotti as $k => $v){
        if($v > 50){
            echo "$k: $v\n";
        }
    }
?>