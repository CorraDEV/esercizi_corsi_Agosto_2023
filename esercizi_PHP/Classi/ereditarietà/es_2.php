<?php
    class Animale5{
        public function verso(){
            echo "verso animale";
        }
    }
    class Cane2 extends Animale5{
        public function verso(){
            echo "Bau!";
        }
    }
    $cane = new Cane2();
    $cane->verso();
?>