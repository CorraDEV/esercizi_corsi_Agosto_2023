<?php
    $sum = 0;
    $counter = 0;        

    do{        
        $counter++;
        $val = readline("numero $counter: ");
        $val = (float)$val;        
        $sum += $val;        
    }while($counter < 5);

    $media = $sum / $counter;
    echo "valore media: $media";
?>