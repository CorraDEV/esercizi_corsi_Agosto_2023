<?php
    function eliminaDirectory($path){
        $files = scandir($path);                        
        $nomeDirectory = basename($path);

        foreach($files as $file){
            if($file != '.' && $file != '..' && is_dir($path.'/'.$file)){
                if(count(scandir($path . '/' . $file)) > 2){
                    eliminaDirectory($path.'/'.$file);
                }    
                else{
                    $nomeSottoDirectory = basename($path.'/'.$file);                    
                    
                    if(rmdir($path.'/'.$file)){
                        echo "cartella $nomeSottoDirectory presente in $nomeDirectory eliminata con successo\n";
                    }
                    else{
                        echo "operazione fallita\n";
                    }
                }
            }
            else if($file != '.' && $file != '..'){
                $nomeFile = basename($path.'/'.$file);                    
                
                if(unlink($path . '/' . $file)){
                    echo "file $nomeFile presente in $nomeDirectory eliminato con successo\n";    
                }   
                else{
                    echo "operazione fallita\n";    
                }             
            }
        }
        
        if(rmdir($path)){
            echo "cartella $nomeDirectory eliminata con successo\n";
        }
        else{
            echo "operazione fallita\n";
        }
    }
        
    $path = 'cartella1';            
    $nome = basename($path);
    
    if(file_exists($path)){
        if(is_dir($path))
            eliminaDirectory($path);
        else
            echo "$nome non è una directory";
    }
    else{
        echo "$nome non esiste";
    }                
?>