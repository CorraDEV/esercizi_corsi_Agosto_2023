<?php
    $ref = "testo2.txt";
    $nomeFile = basename($ref);    

    if(unlink($ref)){
        echo "file $nomeFile eliminato con successo";
    }
    else{
        echo "operazione fallita";
    }
?>