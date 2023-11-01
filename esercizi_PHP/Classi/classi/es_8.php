<?php
    class Film{
        private $titolo;
        private $regista;
        private $anno;

        public function __construct($titolo, $regista, $anno){
            $this->titolo = $titolo;
            $this->regista = $regista;
            $this->anno = $anno;
        }
        public function __toString(){
            return "titolo: $this->titolo  regista: $this->regista  anno: $this->anno";
        }
    }
    
    $movie = new Film("Titolo", "Regista", 2018);
    echo $movie;
?>