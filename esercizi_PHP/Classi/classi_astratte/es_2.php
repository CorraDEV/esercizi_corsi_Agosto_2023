<?php
    abstract class Animale2{
        abstract public function emettiVerso();
    }
    class Cane extends Animale2{
        public function emettiVerso(){
            echo "Bark!";
        }
    }

    $c = new Cane();
    $c->emettiVerso();
?>