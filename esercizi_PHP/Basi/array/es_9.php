<?php
    $numeri = [13, 91, 2, 3];
    $numeri2 = [9, 17, 7, 11];
    $vector = [...$numeri, ...$numeri2];
    
    foreach($vector as $v){
        echo "$v\n";
    }
?>