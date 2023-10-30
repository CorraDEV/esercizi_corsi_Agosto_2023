<?php
    $voti = [
        "Massimo" => [4, 6, 7, 10],
        "Marco" => [10, 10, 5, 8],
        "Mirco" => [9, 5, 7, 7]
    ];
    
    foreach($voti as $key => $rows){
        $sum = 0;
        
        foreach($rows as $column){
            $sum += $column;
        }

        $media = $sum / count($rows);
        
        echo "$key ha una media di valore: $media\n";
    }
?>