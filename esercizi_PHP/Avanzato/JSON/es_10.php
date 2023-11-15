<?php
$arrJSON = '["1", "2", "3", "4", "5", "6"]';
$arr = json_decode($arrJSON);
$arr = array_filter($arr, fn($value)=>$value % 2 != 0);
$arr = array_values($arr);
$arrJSON = json_encode($arr);
echo $arrJSON;
?>