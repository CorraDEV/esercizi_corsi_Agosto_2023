<?php
    $matrix = [
        ["Marco", "Rossi", 27],
        ["Federico", "Verdi", 33],
        ["Simone", "Gialli", 50]        
    ];
    
    for($i = 0; $i < count($matrix); $i++){
        for($j = 0; $j < count($matrix[$i]); $j++){
            echo $matrix[$i][$j].' ';
        }
        echo "\n";
    }
?>