<?php
$jsonString = file_get_contents('data.json');
$obj = json_decode($jsonString);
foreach($obj as $key => $value){
    echo "$key => $value\n";
}
?>