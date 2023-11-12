<?php
function stampaMassimo($nums, $maxSrc){
    echo $maxSrc($nums);
}
$trovaMassimo = function($nums){
    return max($nums);
};
$nums = [3,6,3,2,8,9,6,3];
stampaMassimo($nums, $trovaMassimo);
?>