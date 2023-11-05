<?php
    abstract class Veicolo{
        abstract public function accelera();
    }

    class Automobile extends Veicolo{        
        public function accelera(){
            echo "sto accelerando...";
        }
    }

    $a = new Automobile();
    $a->accelera();    
?>