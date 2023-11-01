<?php
    function rimuoviSpazi($stringa){
        $stringa = str_replace(" ","",$stringa);
        return $stringa;
    }

    $parola = "c i a o";
    $parola = rimuoviSpazi($parola);
    echo $parola;
?>