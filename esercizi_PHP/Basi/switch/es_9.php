<?php
    $mese = 10;

    switch($mese){        
        case 3:
        case 4:            
        case 5:
            echo "Primavera";
            break;
        case 6:
        case 7:
        case 8:
            echo "Estate";
            break;
        case 9:
        case 10:
        case 11:
            echo "Autunno";
            break;
        case 12:
        case 1:
        case 2:
            echo "Inverno";
            break;
        default:
            echo "Mese inserito non valido";
    }
?>