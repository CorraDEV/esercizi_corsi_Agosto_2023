<?php
    $voto = 100;

    switch(true){
        case ($voto >= 0 && $voto < 60):
            echo "insufficiente";
            break;
        case ($voto >= 60 && $voto < 70):
            echo "voto basso";
        case ($voto >= 70 && $voto < 80):
            echo "voto discreto";
            break;
        case ($voto >= 80 && $voto < 90):
            echo "voto ottimo";
            break;
        case ($voto >= 90 && $voto <= 100):
            echo "voto eccellente";
            break;
        default:
            echo "voto non valido";
    }
?>