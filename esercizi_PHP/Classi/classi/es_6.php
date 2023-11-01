<?php
    class Libro{
        private $titolo;
        private $autore;

        public function __construct($titolo, $autore){
            $this->titolo = $titolo;
            $this->autore = $autore;
        }
        public function __toString(){
            return "Titolo: $this->titolo  Autore: $this->autore";
        }
    }

    $lib = new Libro("NuovoTitolo", "NuovoAutore");
    echo $lib;
?>