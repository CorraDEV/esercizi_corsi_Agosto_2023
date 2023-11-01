<?php
    function calcolaFattoriale($num){
        $fatt = 1;
        for($i = $num; $i > 1; $i--){
            $fatt *= $i;
        }
        return $fatt;
    }

    $num = 5;
    $res = calcolaFattoriale($num); 
    echo "Fattoriale: $res";
?>