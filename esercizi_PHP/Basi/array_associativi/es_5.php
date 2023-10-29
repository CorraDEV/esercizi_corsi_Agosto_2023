<?php
    $parole = [
        "gatto" => strlen("gatto"),
        "cane" => strlen("cane"),
        "cavallo" => strlen("cavallo"),
        "leone" => strlen("leone"),
        "delfino" => strlen("delfino")
    ];

    $maxLength = max($parole);

    foreach($parole as $key => $value){
        if($value == $maxLength){
            echo "$key: $value\n";
        }
    }
?>