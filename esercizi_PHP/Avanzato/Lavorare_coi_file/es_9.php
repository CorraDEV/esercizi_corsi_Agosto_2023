<?php
    $nomeDirectory = "nuova_cartella";

    if(mkdir($nomeDirectory)){
        echo "cartella creata con successo";
    }
    else{
        echo "operazione fallita";
    }
?>