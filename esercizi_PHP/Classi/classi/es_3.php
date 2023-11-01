<?php
    class Veicolo{
        private $marca;
        private $anno;        

        public function __construct($marca = "", $anno = null){
            $this->marca = $marca;
            $this->anno = $anno;            
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getAnno(){
            return $this->anno;
        }        
        public function __toString(){
            return "$this->marca ".$this->anno->format('d-m-y');
        }
    }

    $nuovoVeicolo = new Veicolo("Opel",new DateTime('2023-10-12'));
    echo $nuovoVeicolo;
?>