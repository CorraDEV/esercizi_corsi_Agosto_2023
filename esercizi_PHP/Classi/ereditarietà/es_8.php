<?php
    class Figura{
        public function calcolaPerimetro(){
            return 0;
        }
    }
    class Quadrato extends Figura{
        private $lato;
        public function __construct($lato) {
            $this->lato = $lato;
        }
        public function calcolaPerimetro(){
            return $this->lato * 4;
        }
    }
    $quad = new Quadrato(4);
    echo "perimetro quadrato: " . $quad->calcolaPerimetro();
?>