<?php
    $num1 = 4.30;
    $num2 = 4.20;
        
    $res = $num1 - $num2; 
    $resFormatted = number_format($res, 2);    
    echo $resFormatted;
?>