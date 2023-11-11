<?php    
    $data_oggi = new DateTime();
    $data_domani = $data_oggi->modify('+1 day');     
    echo $data_domani->format('d-m-Y');    
?>