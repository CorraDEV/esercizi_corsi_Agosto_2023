<?php
    abstract class Animale3{
        abstract public function emettiSuono();
    }
    class Gatto extends Animale3{
        public function emettiSuono(){
            echo "meow";
        }
    }
    $cat = new Gatto();
    $cat->emettiSuono();
?>