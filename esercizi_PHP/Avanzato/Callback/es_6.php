<?php
function stampa($stringa, $controllo){
    if($controllo($stringa)){
        echo "parola non inizia con 'A'";
    }
    else{
        echo "parola inizia con 'A'";
    }
}
$validazione = function($stringa){
    return $stringa[0] !== 'A'; 
};

$str = "Mario";
stampa($str, $validazione);
?>