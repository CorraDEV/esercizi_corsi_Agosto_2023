<?php
    $studenti = [
        "1A" => [
            "01" => "Marco Rossi",
            "02" => "Giulio Verdi",
            "03" => "Tommaso Marrone"
        ],
        "2A" => [
            "01" => "Marco Verdi",
            "02" => "Giulio Rossi",
            "03" => "Tommaso Gialli"
        ],
        "3A" => [
            "01" => "Marco Gialli",
            "02" => "Giulio Marrone",
            "03" => "Tommaso Rossi"
        ]
    ];

    foreach($studenti as $keyClass => $alunno){                                
        echo "$keyClass:\n";        
        foreach($alunno as $k => $v){
            echo "matricola: $k  nome: $v\n";
        }
        echo "\n";
    }
?>