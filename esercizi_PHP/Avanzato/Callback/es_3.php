<?php
function stampaArray($arr, $filtro){
    $arrFiltered = $filtro($arr);
    foreach($arrFiltered as $v){
        echo "$v\n";
    }
}

$filtroPari = function($arr){
    $size = count($arr);
    for($i = 0; $i < $size; $i++){
        if($arr[$i] % 2 != 0){
            unset($arr[$i]);
        }
    }
    return $arr;
};

$nums = [2,4,1,3,5,6,7,8,9,10];
stampaArray($nums, $filtroPari);
?>