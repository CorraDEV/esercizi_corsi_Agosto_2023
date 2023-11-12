<?php
function stampaArrayModificato($arr, $modifica){
    $arrModified = $modifica($arr);
    foreach($arrModified as $k => $v){
        echo "$k => $v\n";
    }
}

$diminuisci = function($arr){
    foreach($arr as $k => $v){
        $arr[$k] -= 2;
    }
    return $arr;
};

$nums = [1,2,3,4,5,6,7,8,9];
stampaArrayModificato($nums, $diminuisci);
?>