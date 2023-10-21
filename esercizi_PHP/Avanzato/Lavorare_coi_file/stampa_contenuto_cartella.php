<?php
    function leggiDirectory($path){
        $files = scandir($path);
        $nomeDirectory = basename($path);        
        
        foreach($files as $file){
            if($file != '.' && $file != '..' && is_dir($path.'/'.$file)){
                echo "$file si trova in $nomeDirectory\n";
                leggiDirectory($path.'/'.$file);
            }
            else if($file != '.' && $file != '..'){
                echo "$file si trova in $nomeDirectory\n";
            }
        }        
    }
        
    $path = 'cartella1';            
    $nome = basename($path);
    
    if(file_exists($path)){
        if(is_dir($path))
            leggiDirectory($path);
        else
            echo "$nome non è una directory";
    }
    else{
        echo "$nome non esiste";
    }                
?>