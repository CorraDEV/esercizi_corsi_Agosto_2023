<?php    
    function sommaNumeri(...$nums){
        $sum = 0;
        foreach($nums as $num){
            $sum += $num;
        }
        return $sum;
    }
?>