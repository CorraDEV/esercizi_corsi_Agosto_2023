<?php
    $temperature = [
        "Monday" => [10, 30],
        "Tuesday" => [15, 20],
        "Wednesday" => [23, 26]
    ];

    foreach($temperature as $k => $temp){
        $sum = 0;
        foreach($temp as $t){
            $sum += $t;                        
        }
        $media = $sum / count($temp);
        echo "$k ha una temperatura media di valore: $media\n"; 
    }
?>