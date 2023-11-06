<?php
    interface Volante{
        public function volare();
    }
    class Aereo implements Volante{
        public function volare(){
            echo "l'aereo sta volando...";
        }
    }
    $aereo = new Aereo();
    $aereo->volare();
?>