<?php
    function verificaPalindromo($parola){
        if($parola == strrev($parola)){
            return true;
        }
        return false;
    }

    $parola = "esose";
    $res = verificaPalindromo($parola);
    
    if($res){
        echo "$parola è palindroma";
    }
    else{
        echo "$parola non è palindroma";
    }
?>