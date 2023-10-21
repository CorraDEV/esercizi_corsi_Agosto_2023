<?php
    $ref = 'testo1.txt';
    
    if(file_exists($ref)){
        //lettura su file
        $file = fopen($ref,'r');
        $content = fread($file, filesize($ref));                
        echo $content;
        fclose($file);
    }
    else{
        echo "File not found";
    }
?>