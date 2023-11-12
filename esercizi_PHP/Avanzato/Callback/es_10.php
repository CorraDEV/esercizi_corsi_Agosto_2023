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

$nums = ['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8,'i'=>9];
stampaArrayModificato($nums, $diminuisci);
?>