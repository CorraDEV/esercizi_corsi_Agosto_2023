<?php
    $directory = 'cartella1';            
    $files = scandir($directory);
    
    foreach($files as $file){
        $path = $directory . '/' . $file; 
        if(
            $file != '.' &&
            $file != '..' &&
            is_file($path)
        ){
            echo "$file\n";
        }
    }    
?>