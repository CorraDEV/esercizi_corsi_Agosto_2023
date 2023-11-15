<?php
$arrJSON = '["red", "blue", "orange", "yellow"]';
$arr = json_decode($arrJSON);
foreach($arr as $v){
    echo "$v\n";
}
?>