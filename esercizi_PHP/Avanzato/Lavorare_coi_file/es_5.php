<?php
    $ref = "testo1.txt";
    $oldNomeFile = basename($ref);
    $newNomeFile = "testo197.txt";
    
    if(rename($ref, $newNomeFile)){        
        echo "il file chiamato $oldNomeFile è stato rinominato in $newNomeFile";
    }
    else{
        echo "operazione fallita";
    }        
?>