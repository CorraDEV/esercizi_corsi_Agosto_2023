<?php
function stampaArray($arr, $ordCre){
    $arrOrdered = $ordCre($arr);
    foreach($arrOrdered as $v){
        echo "$v\n";
    }
}

$ordinaArray = function($arr){
    asort($arr);
    return $arr;
};

$nums = [10, 9, 3, 2, 6, 8, 1];
stampaArray($nums, $ordinaArray);
?>