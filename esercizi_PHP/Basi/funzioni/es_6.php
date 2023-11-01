<?php
    function stringheMaiuscole($stringhe){        
        for($i = 0; $i < count($stringhe); $i++){
            $stringhe[$i] = strtoupper($stringhe[$i]);
        }
        return $stringhe;
    }

    $stringhe = ["tavolo", "sedia", "poltrona", "scrivania", "armadio"];
    $stringhemaiusc = stringheMaiuscole($stringhe);
    foreach($stringhemaiusc as $s){
        echo "$s\n";
    } 
?>