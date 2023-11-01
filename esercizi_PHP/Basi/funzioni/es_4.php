<?php
    function verificaPariDispari($numero){
        if($numero % 2 == 0){
            return true;
        }
        return false;
    }
    $num = 5;
    $res = verificaPariDispari($num);
    if($res){
        echo "Pari";;
    }
    else{
        echo "Dispari";
    }
?>