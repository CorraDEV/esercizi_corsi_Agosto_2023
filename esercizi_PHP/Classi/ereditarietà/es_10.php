<?php
    class Persona3{
        private $nome;
        private $cognome;
        public function __construct($nome, $cognome){
            $this->nome = $nome;
            $this->cognome = $cognome;
        }
        public function presentati(){
            return "Ciao, sono " . $this->nome . " " . $this->cognome;
        }
    }
    class Studente2 extends Persona3{
        private $matricola;
        public function __construct($nome, $cognome, $matricola){
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }
        public function presentati(){
            return parent::presentati() . " e ho la matricola {$this->matricola}";
        }
    }

    $persona = new Studente2("Luigi", "Verdi", "A0002");
    echo $persona->presentati();
?>