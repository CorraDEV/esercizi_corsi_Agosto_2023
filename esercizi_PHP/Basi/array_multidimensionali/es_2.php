<?php
    $matrix = [
        ["sedia", "tavolo", "poltrona"],
        ["scrivania", "quadro", "penna"],
        ["computer", "tastiera", "mouse"]        
    ];

    foreach($matrix as $rows){
        foreach($rows as $column){
            echo "$column ";
        }
        echo "\n";
    }
?>