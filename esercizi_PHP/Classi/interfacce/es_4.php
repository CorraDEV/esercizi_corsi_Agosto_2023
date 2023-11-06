<?php
    interface Animale4{
        public function emettiVerso();
    }
    class Cane implements Animale4{
        public function emettiVerso(){
            echo "Bark!";
        }
    }
    $cane = new Cane();
    $cane->emettiVerso();
?>