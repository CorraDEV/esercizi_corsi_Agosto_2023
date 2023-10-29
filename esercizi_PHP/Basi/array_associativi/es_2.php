<?php
    $votiStudenti = [
        "Marco" => 10,
        "Mirco" => 2,
        "Massimo" => 7,        
    ];

    $sum = 0;

    foreach($votiStudenti as $k => $v){
        $sum += $v;
        echo "$k: $v\n";        
    }

    $media = $sum / count($votiStudenti);
    echo "Media: ".number_format($media, 2);
?>