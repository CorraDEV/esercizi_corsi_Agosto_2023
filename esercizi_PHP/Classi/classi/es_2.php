<?php
    class Prodotto{
        private $codice;
        private $nome;
        private $prezzo;

        public function __construct($codice = "", $nome = "", $prezzo = null){
            $this->codice = $codice;
            $this->nome = $nome;
            $this->prezzo = $prezzo;
        }
        public function getCodice(){
            return $this->codice;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getPrezzo(){
            return $this->prezzo;
        }
        public function __toString(){
            return "$this->codice $this->nome $this->prezzo";
        }
    }

    $nuovoProdotto = new Prodotto("P001", "Televisore", 200);
    echo $nuovoProdotto;
?>