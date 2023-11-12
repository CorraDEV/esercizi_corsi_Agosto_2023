<?php    
function sommaNumeri(...$nums){
    $sum = 0;
    foreach($nums as $num){
        $sum += $num;
    }
    return $sum;
}
function moltiplicaNumeri(...$nums){
    $prodotto = 1;
    foreach($nums as $num){
        $prodotto *= $num;
    }
    return $prodotto;
}
?>