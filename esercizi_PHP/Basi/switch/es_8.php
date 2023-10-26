<?php
    $targa = "AA 111 FF";

    $tipoVeicolo = substr($targa, 0, 2);

    switch ($tipoVeicolo) {
        case "AA":
            echo "Auto";
            break;
        case "BB":
            echo "Moto";
            break;
        case "CC":
            echo "Camion";
            break;
        default:
            echo "Tipo veicolo non riconosciuto";
    }
?>