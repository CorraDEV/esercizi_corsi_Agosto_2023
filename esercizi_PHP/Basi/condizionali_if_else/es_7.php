<?php
    $stringa = "  5  ";

    if($stringa == ""){
        echo "vuota";
    }
    else if(trim($stringa) == ""){
        echo "solo spazi bianchi";
    }
    else{
        echo "ci sono dei caratteri";
    }
?>