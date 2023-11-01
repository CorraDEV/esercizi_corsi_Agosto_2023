<?php
    class Persona{
        private $nome;
        private $cognome;
        
        public function __construct($nome = "", $cognome = ""){
            $this->nome = $nome;
            $this->cognome = $cognome;
        }        

        public function getNome(){
            return $this->nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function getNomeCompleto(){
            return $this->nome.' '.$this->cognome;
        }
    }

    $randomPers = new Persona("Marco", "Rossi");
    $nomeCompleto = $randomPers->getNomeCompleto();
    echo $nomeCompleto;
?>