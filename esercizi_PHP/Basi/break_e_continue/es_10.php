<?php
    for($i=1;$i<=100;$i++){
        if($i % 3 == 0 && $i % 7 == 0){
            break;
        }
        echo "$i\n";
    }
?>