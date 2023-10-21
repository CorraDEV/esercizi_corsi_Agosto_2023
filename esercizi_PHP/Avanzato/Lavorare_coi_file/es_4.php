<?php
    $ref = "testo1.txt";
    if(file_exists($ref)){
        $contenuto = file_get_contents($ref);        
        echo "contenuto di $ref: $contenuto\n";
        
        $ref = "testo2.txt";        
        if(file_exists($ref)){
            file_put_contents($ref, $contenuto);                      
            $contenuto = file_get_contents($ref);        
            echo "contenuto di $ref: $contenuto";
        }
        else{
            echo "file non esistente";
        }
    }
    else{
        echo "file non esistente";
    }
?>