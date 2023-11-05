<?php
    abstract class Persona{
        abstract public function saluta();
    }
    class Studente extends Persona{
        public function saluta(){
            echo "Buongiorno prof";
        }
    }
    $s = new Studente();
    $s->saluta();
?>