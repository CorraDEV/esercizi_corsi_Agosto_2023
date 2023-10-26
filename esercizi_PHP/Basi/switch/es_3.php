<?php
    $lato1 = 4;
    $lato2 = 4;
    $lato3 = 4;

    switch (true) {
        case ($lato1 == $lato2 && $lato2 == $lato3):
            echo "Triangolo equilatero";
            break;
        case ($lato1 == $lato2 || $lato1 == $lato3 || $lato2 == $lato3):
            echo "Triangolo isoscele";
            break;
        default:
            echo "Triangolo scaleno";
    }
?>