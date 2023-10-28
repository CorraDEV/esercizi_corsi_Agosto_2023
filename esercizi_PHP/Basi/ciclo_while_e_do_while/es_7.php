<?php
    $num1 = 1;
    $num2 = 1;
    $fib = 1;
    $c = 0;

    do{
        if($c == 0 || $c == 1){
            echo "$fib\n";
        }
        else{
            $fib = $num1 + $num2;
            $num1 = $num2;
            $num2 = $fib;
            echo "$fib\n";
        }   
        $c++;     
    }while($c < 10);
?>    