<?php
    $parola = "CuFfIe";
    $parola = str_split($parola);

    foreach($parola as $p){        
        if($p == strtoupper($p)){
            echo "$p\n";        
        }        
    }
?>