<?php
    class Veicolo5{
        public function avvia(){
            echo "Veicolo avviato";
        }
    }
    class Automobile extends Veicolo5{
        public function avvia(){
            echo "Automobile avviata";
        }
    }
    $auto = new Automobile();
    $auto->avvia();
?>