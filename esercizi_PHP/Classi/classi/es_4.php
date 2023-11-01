<?php
    class Studente{
        private $matricola;
        private $nome;
        private $cognome;
        public function __construct($matricola="", $nome="", $cognome=""){
            $this->matricola = $matricola;
            $this->nome = $nome;
            $this->cognome = $cognome;
        }
        public function getMatricola(){
            return $this->matricola;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getCognome(){
            return $this->cognome;
        }
        public function getNomeCompleto(){
            return "$this->nome $this->cognome";
        }
    }
    $stu = new Studente("001","Marco", "Rossi");    
    echo $stu->getNomeCompleto();
?>