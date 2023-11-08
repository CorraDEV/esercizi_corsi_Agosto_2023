<?php
    class Animale6{
        public function mangia(){
            echo "L'animale sta mangiando";
        }
    }
    class Cane extends Animale6{
        public function mangia(){
            echo "Il cane sta mangiando";
        }
    }
    $cane = new Cane();
    $cane->mangia();
?>