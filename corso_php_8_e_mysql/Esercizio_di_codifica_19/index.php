<?php
    $last = array_pop($data);
    array_push($data, "END");
    $first = array_shift($data);
    array_unshift($data, 1);
?>