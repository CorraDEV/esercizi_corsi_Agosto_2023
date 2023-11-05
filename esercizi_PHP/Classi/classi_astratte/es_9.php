<?php
    abstract class Prodotto{        
        abstract public function calcolaPrezzo();
    }
    class Libro extends Prodotto{
        private $quant;
        private $prezzo;
        public function __construct($quant, $prezzo){
            $this->quant = $quant;
            $this->prezzo = $prezzo;
        }
        public function calcolaPrezzo(){
            return $this->prezzo * $this->quant;
        }
    }

    $l = new Libro(3, 4);
    echo "prezzo totale: ".$l->calcolaPrezzo();
?>