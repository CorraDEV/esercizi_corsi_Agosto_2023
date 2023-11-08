<?php
    class Prodotto2{
        private $nome;
        private $prezzo;
        public function __construct($nome, $prezzo){
            $this->nome = $nome;
            $this->prezzo = $prezzo;
        }
        public function visualizza(){
            echo "nome: " . $this->nome . " " . "prezzo: " . $this->prezzo;
        }
    }
    class Libro extends Prodotto2{
        private $autore;
        public function __construct($nome, $prezzo, $autore){
            parent::__construct($nome, $prezzo);
            $this->autore = $autore;
        }
        public function visualizza(){
            echo parent::visualizza() . " " . "autore: " . $this->autore;
        }
    }
    $libro = new Libro("Il Libro", 20, "Mario Rossi");
    $libro->visualizza();
?>