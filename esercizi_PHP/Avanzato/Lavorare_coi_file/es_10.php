<?php
    $directory = "nuova_cartella";
    $files = scandir($directory);
    foreach($files as $file) {         
        $path = $directory . "/" . $file; 
        if($file != "." && $file != ".." && is_file($path)) {
            unlink($path);
        }        
    }
    
    if(rmdir($directory)){
        echo "Directory eliminata con successo";
    }    
    else{
        echo "operazione fallita";
    }    
?>