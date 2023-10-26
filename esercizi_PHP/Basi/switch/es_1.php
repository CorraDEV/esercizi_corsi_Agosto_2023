<?php
    $giorno = 3;

    switch ($giorno) {
        case 1:           
            echo "Lunedì"; 
            break;
        case 2:
            echo "Martedì";
            break;
        case 3:            
            echo "Mercoledì";
            break;
        case 4:
            echo "Giovedì";
            break;
        case 5:            
            echo "Venerdì";
            break;
        case 6:
            echo "Sabato";
            break;
        case 7:            
            echo "Domenica";                                            
            break;
        default:
            echo "giorno non valido";
    }
?>