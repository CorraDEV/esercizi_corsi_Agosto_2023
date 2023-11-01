<?php
    function invertiStringa($stringa){
        $invertedStringa = "";
        for($i = 0; $i < strlen($stringa); $i++){
            $invertedStringa = $stringa[$i] . $invertedStringa;
        }
        return $invertedStringa;
    }

    $stringa = "parola";
    $res = invertiStringa($stringa);
    echo $res;
?>