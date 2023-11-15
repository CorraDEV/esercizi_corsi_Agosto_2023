<?php
$jsonString = file_get_contents('data.json');
$array = json_decode($jsonString, true);
echo "numero elementi: ".count($array);
?>