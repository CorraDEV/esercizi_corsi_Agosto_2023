<?php
function stampaRes($nums, $sommaNumeri){
    echo $sommaNumeri($nums);
}
$sommaNumeri = function($nums){
    $sum = 0;
    foreach($nums as $num){
        $sum += $num;
    }
    return $sum;
};
$nums = [3,6,8,2];
stampaRes($nums, $sommaNumeri);
?>