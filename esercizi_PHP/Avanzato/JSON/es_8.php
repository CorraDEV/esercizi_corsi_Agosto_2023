<?php
$jsonString = file_get_contents('data.json');
$array = json_decode($jsonString, true);
$sum = 0;
foreach ($array as $obj) {
    $sum += $obj['eta'];
}
echo "somma età: $sum";
?>