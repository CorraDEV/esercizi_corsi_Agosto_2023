<?php
    class Matematica{        
        public static function somma($numeri){
            $sum = 0;
            foreach($numeri as $n){
                $sum += $n;
            }
            return $sum;
        }
    }

    $nums = [4, 5, 2, 7];
    echo "somma: " . Matematica::somma($nums);
?>