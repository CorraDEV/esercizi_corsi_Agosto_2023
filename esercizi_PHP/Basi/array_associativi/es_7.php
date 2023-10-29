<?php
    $cities = [
        "Milano" => 700,
        "Lodi" => 500,
        "Roma" => 220,
        "Napoli" => 280
    ];
    
    $city = "Lodi";

    if(array_key_exists($city, $cities)){
        echo "$city esiste";
    }
    else{
        echo "$city non esiste";
    }
?>