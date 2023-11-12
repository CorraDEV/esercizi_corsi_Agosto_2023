<?php
function stampaArrayModificato($arr, $modifica){
    $arrModified = $modifica($arr);
    foreach($arrModified as $v){
        echo "$v\n";
    }
}

$raddoppia = function($arr){
    for($i=0;$i<count($arr);$i++){
        $arr[$i] *= 2;
    }
    return $arr;
};

$nums = [1,2,3,4,5,6,7,8,9];
stampaArrayModificato($nums, $raddoppia);
?>