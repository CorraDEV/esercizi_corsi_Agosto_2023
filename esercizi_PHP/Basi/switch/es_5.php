<?php
    $livelloImportanza = "Basso";

    switch($livelloImportanza){
        case "Basso":
            echo "messaggio di bassa importanza";
            break;
        case "Medio":
            echo "messaggio di media importanza";
            break;
        case "Alto":
            echo "messaggio di alta importanza";
            break;
        default:
            echo "errore: livello non valido";
    }
?>