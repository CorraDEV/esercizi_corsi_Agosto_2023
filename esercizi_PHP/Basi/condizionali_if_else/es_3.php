<?php
    $num = 4;
    if($num % 3 == 0 && $num % 5 == 0){
        echo "$num multiplo di 3 e 5";
    }
    else if($num % 3 == 0){
        echo "$num multiplo di 3";
    }
    else if($num % 5 == 0){
        echo "$num multiplo di 5";
    }
    else{
        echo "$num non è multiplo di 3 e 5";
    }
?>