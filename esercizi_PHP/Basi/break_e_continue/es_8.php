<?php
    for($i = 1; $i <= 100; $i++){
        $isPrimo = true;
        for($j = 2; $j < $i; $j++){
            if($i % $j == 0){
                $isPrimo = false;
                break;
            }
        }
        if($isPrimo){
            break;
        }        
        echo "$i\n";        
    }
?>