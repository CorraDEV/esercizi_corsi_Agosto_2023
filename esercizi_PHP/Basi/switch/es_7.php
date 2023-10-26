<?php    
    $codice = "#FFFFFF";
    
    switch ($codice) {
        case "#FF0000":
            echo "Rosso";
            break;
        case "#000000":
            echo "Nero";
            break;
        case "#FFFFFF":
            echo "Bianco";
            break;
        default:
            echo "Colore non riconosciuto";
    }    
?>