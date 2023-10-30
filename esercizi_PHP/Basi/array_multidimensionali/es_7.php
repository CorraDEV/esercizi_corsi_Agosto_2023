<?php
    $studenti = [
        "001" => ["Anna", "Rossi"],
        "002" => ["Marco", "Gialli"],
        "003" => ["Giuseppe", "Verdi"]
    ];

    $matricolaRicercata = "001";
    $isTrovato = false;

    foreach($studenti as $k => $v){        
        if($k == $matricolaRicercata){
            $isTrovato = true;
            
            foreach($v as $studente){
                echo "$studente ";
            }
        }                        
    }

    if(!$isTrovato){
        echo "Studente non trovato";
    }    
?>