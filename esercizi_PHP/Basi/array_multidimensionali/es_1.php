<?php
    $matrix = [
        [45, 29, 48],
        [13, 31, 90],
        [11, 27, 46],
        [33, 22, 33]
    ];

    foreach($matrix as $rows){
        foreach($rows as $column){
            echo "$column ";
        }
        echo "\n";
    }
?>