<?php
    abstract class Veicolo2{
        abstract public function avvia();
    }
    class moto extends Veicolo2{
        public function avvia(){
            echo "moto avviata";
        }
    }
    $moto = new moto();
    $moto->avvia();
?>