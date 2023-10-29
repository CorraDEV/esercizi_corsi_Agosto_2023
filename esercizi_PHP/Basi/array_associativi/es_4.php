<?php
    $daysTemp = [
        'giorno 1' => 20,  
        'giorno 2' => 30,
        'giorno 3' => 22,
        'giorno 4' => 33,
        'giorno 5' => 17
    ];

    $tmax = max($daysTemp);
    $tmaxKey = array_search($tmax, $daysTemp);
    echo "temperatura massima rilevata in:\n$tmaxKey: $tmax";
?>