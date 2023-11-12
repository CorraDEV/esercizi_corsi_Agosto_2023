<?php
function sommaDueNumeri($num1, $num2){
    return $num1 + $num2;
}
function stampaResOperazione($num1, $num2, $func){
    echo $func($num1, $num2);
}

$n1 = 5;
$n2 = 7;
$f = "sommaDueNumeri";
stampaResOperazione($n1, $n2, $f);
?>