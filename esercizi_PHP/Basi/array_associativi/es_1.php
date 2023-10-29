<?php
    $dati_personali = [
        'name' => 'Marco',
        'surname' => 'Rossi',
        'age' => 35
    ];

    foreach($dati_personali as $k => $v){
        echo "$k: $v\n";
    }
?>