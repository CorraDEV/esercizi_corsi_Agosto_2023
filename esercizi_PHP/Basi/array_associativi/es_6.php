<?php
    $studenti = [
        "MR1111413" => "Marco Rossi",
        "GV1222413" => "Giulio Verdi",
        "AG3234133" => "Anna Gialli"        
    ];
    $matricola = array_search("Giulio Verdi", $studenti);
    
    if($matricola){
        echo "lo studente $studenti[$matricola] ha matricola: $matricola";
    }
    else{
        echo "studente non trovato";
    }    
?>