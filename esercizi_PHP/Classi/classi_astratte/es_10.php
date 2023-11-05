<?php
    abstract class Veicolo3{
        abstract public function ferma();
    }

    class Auto2 extends Veicolo3{
        public function ferma(){
            echo "Auto fermata...";
        }
    }
    $auto = new Auto2();
    $auto->ferma();
?>