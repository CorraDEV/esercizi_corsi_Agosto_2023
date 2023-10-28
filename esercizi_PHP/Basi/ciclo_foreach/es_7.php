<?php
    $vector = [4, 5, 7, 3, 3];
    $sum = 0;
    foreach($vector as $v){
        $sum += $v;
    }
    $media = $sum / count($vector);
    echo $media;
?>