<?php
    class Prodotto{
        private $nome;
        private $prezzo;

        public function __construct($nome, $prezzo){
            $this->nome = $nome;
            $this->prezzo = $prezzo;
        }
        public function __toString(){
            return "nome: $this->nome  prezzo: $this->prezzo";
        }
    }
    $p = new Prodotto("televisore", 200);
    echo $p;
?>