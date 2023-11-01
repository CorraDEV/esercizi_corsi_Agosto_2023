<?php
    function trovaMax($values){
        return max($values);
    }

    $nums = [1, 33, 13, 6, 52, 11, 22];
    $max = trovaMax($nums);
    echo $max;
?>