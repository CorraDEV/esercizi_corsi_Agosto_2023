<?php
    class Animale{
        private $nome;
        private $specie;

        public function __construct($nome, $specie){
            $this->nome = $nome;
            $this->specie = $specie;
        }
        public function __toString(){
            return "nome: $this->nome  specie: $this->specie";
        }
    }
    $an = new Animale("Nessy", "Foca");
    echo $an;
?>