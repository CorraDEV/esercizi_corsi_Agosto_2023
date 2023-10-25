<?php
    $numero = -7;

    if($numero >=1 && $numero <= 100){
        echo "$numero tra 1 e 100";
    }
    else if($numero > 100 && $numero <= 200){
        echo "$numero tra 101 e 200";
    }
    else if($numero > 200){
        echo "$numero maggiore di 200";
    }
    else{
        echo "$numero minore di 1";
    }        
?>