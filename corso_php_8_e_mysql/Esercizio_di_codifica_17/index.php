<?php
    function calculateSum(int ...$nums){        
        $tot = count($nums);
        $sum = 0;                

        if($tot === 0) 
            return $sum;
        else{
            foreach ($nums as $value)
                $sum += $value;
        }
        return $sum;
    }
    
    echo calculateSum(3, 6, 12);
?>