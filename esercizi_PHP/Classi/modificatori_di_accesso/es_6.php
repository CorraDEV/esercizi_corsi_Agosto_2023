<?php
    class Animale2{
        private $specie;
        public function getSpecie(){
            return $this->specie;
        }
        public function setSpecie($specie){
            $this->specie = $specie;
        }
    }
    $a = new Animale2();
    $a->setSpecie("felino");
    echo $a->getSpecie();
?>