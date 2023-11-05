<?php
    abstract class Esercizio{
        abstract public function esegui();
    }

    class EsercizioMatematico extends Esercizio{
        public function esegui(){
            echo "Esercizio Matematico eseguito";
        }
    }

    $em = new EsercizioMatematico(); 
    $em->esegui();
?>