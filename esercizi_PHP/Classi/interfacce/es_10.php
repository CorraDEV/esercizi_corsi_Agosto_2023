<?php
    interface Pagabile{
        public function calcolaTotale();
    }

    class Ordine implements Pagabile{
        private $prod;
        public function __construct($prod){
            $this->prod = $prod;
        }
        public function getProd(){
            return $this->prod;
        }
        public function setProd($prod){
            $this->prod = $prod;
        }
        public function calcolaTotale(){
            $sum = 0;
            foreach($this->prod as $p){
                $sum += $p;
            }
            return $sum;
        }
    }

    $pag = new Ordine(["mela" => 3, "pera" => 2.5, "kiwi" => 2.7]);
    echo "spesa totale: " . $pag->calcolaTotale();
?>