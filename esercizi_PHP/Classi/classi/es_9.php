<?php
    class Auto{
        private $marca;
        private $colore;

        public function __construct($marca, $colore){
            $this->marca = $marca;
            $this->colore = $colore;
        }
        public function __toString(){
            return "marca: $this->marca  colore: $this->colore";
        }
    }
    $a = new Auto("Opel", "rosso");
    echo $a;
?>