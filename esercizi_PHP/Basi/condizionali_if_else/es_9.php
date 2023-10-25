<?php
    $numero = 16;
    if($numero % 4 == 0 && $numero % 6 != 0){
        echo "$numero divisibile per 4 ma non per 6";
    }
    else{
        echo "$numero non soddisfa entrambe le condizioni";
    }
?>