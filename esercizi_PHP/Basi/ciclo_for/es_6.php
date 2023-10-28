<?php
    $nums = [2, 4, 7, 11, 22];    
    $sum = 0;
    for($i=0;$i<count($nums);$i++){
        $sum += $nums[$i];
    }
    $media = $sum / count($nums);
    echo $media;
?>