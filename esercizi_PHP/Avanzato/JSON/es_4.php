<?php
$arr = ["nome"=>"Mario", "cognome"=>"Rossi", "età"=>30, "indirizzo"=>"Via Roma, 123, Milano"];
$arrJSON = json_encode($arr);
file_put_contents("data2.json", $arrJSON);
?>