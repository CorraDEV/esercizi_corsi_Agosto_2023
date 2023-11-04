<?php
    class Libro2{
        private $titolo;        
        public function setTitolo($titolo){
            $this->titolo = $titolo;
        }
        public function getTitolo(){
            return $this->titolo;
        }
    }
    $l = new Libro2();
    $l->setTitolo("Titolo2");
    echo $l->getTitolo();
?>