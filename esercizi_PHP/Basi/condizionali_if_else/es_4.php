<?php
    $parola = "tastiera";
    $length = strlen($parola);
    
    if($length < 10){
        echo "lunghezza di $parola minore di 10";
    }
    else if($length >= 10 && $length <= 20){
        echo "lunghezza di $parola tra 10 e 20";
    }
    else{
        echo "lunghezza di $parola maggiore di 20";
    }
?>