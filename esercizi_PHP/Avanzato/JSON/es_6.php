<?php
$jsonString = file_get_contents('data.json');
$array = json_decode($jsonString, true);

usort($array, function($a, $b) {
    return $a['eta'] - $b['eta'];
});

$jsonString = json_encode($array);
file_put_contents('data.json', $jsonString);
?>