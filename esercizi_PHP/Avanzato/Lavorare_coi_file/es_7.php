<?php
    $ref = "testo197.txt";
    $dimensioni = filesize($ref);            

    $datUltModifica = filemtime($ref);
    $datUltModifica = date("Y-m-d H:i:s",$datUltModifica);

    echo "$dimensioni\n$datUltModifica";    
?>