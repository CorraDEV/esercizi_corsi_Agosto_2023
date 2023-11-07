<?php
    class Matematica{
        public static function moltiplica(...$numeri){
            $prodotto = 1;            
            foreach($numeri as $num){
                $prodotto *= $num; 
            }
            return $prodotto;
        }
    }    
    echo Matematica::moltiplica(3, 5, 6, 8);
?>