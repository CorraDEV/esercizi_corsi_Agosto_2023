<?php
    $ref = "testo1.txt";
    
    if(file_exists($ref)){
        echo "file esistente";
    }
    else{
        echo "file non esistente";
    }
?>