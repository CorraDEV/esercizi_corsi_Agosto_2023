<?php
    $anno = 2024;

    if(($anno % 4 == 0 && $anno % 100 != 0) || $anno % 400 == 0) {
        echo "$anno è bisestile.";
    }
    else{
        echo "$anno non è bisestile.";
    }
?>