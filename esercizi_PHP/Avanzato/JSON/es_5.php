<?php
$arrJSON = '["red", "blue", "green", "yellow"]';
echo "$arrJSON\n";
$arr = json_decode($arrJSON);
array_push($arr, "orange");
$arrJSON = json_encode($arr);
echo $arrJSON;
?>