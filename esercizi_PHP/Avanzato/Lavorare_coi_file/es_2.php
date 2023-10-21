<?php
    $ref = 'testo1.txt';
    
    if(file_exists($ref)){
        //scrittura su file
        $file = fopen($ref,'w');
        $content = 'nuovo contenuto';
        fwrite($file, $content);                
        fclose($file);
        
        //lettura su file
        $file = fopen($ref,'r');
        $content = fread($file, filesize($ref));
        echo $content;        
    }
    else{
        echo "File not found";
    }
?>