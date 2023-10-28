<?php
    $num1 = 1;
    $num2 = 1;    
    $fibo = 1;

    for($i = 0; $i < 10; $i++){
        if($i == 0 || $i == 1){
            echo "$fibo\n";
        }
        else{
            $fibo = $num1 + $num2;
            echo "$fibo\n";
            $num1 = $num2;
            $num2 = $fibo;
        }
    }
?>