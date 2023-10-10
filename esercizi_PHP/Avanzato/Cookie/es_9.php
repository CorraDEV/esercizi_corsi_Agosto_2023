<?php
    if(isset($_COOKIE['tempo']))
        echo "tempo rimanenete: ".$_COOKIE['tempo'] - time();    
    else{
        echo "cookie non settato";        
        $expire = time() + 3600;
        setcookie('tempo', $expire, $expire);
    }
?>