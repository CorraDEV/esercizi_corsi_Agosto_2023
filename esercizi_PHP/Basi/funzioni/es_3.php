<?php
    function sommaArray($vector){
        $sum = 0;
        foreach($vector as $v){
            $sum += $v;
        }
        return $sum;
    }

    $arr = [4, 6, 3, 2, 1];
    $res = sommaArray($arr);
    echo $res;
?>