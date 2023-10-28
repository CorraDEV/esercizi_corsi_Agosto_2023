<?php
    $parola = 'TAvOlo';
    $parola = str_split($parola);

    foreach($parola as $p){
        if(
            strtolower($p) == 'a' || 
            strtolower($p) == 'e' ||
            strtolower($p) == 'i' ||
            strtolower($p) == 'o' ||
            strtolower($p) == 'u'
        )        
        {
            echo "$p\n";
        }
    }
?>