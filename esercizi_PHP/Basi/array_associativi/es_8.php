<?php
    $prodotti = [
        "A101" => 200,
        "A102" => 100,
        "A103" => 170
    ];    

    $prodotti["A102"] = 36;

    foreach($prodotti as $k => $v){
        echo "$k => $v\n";
    }
?>