<?php
    interface FormaGeometrica{
        public function calcolaArea();
    }
    class Quadrato implements FormaGeometrica{
        private $lato;
        public function __construct($lato){
            $this->lato = $lato;
        }
        public function calcolaArea(){
            return $this->lato * $this->lato;
        }
    }
    $quadrato = new Quadrato(5);
    echo "totale area: ".$quadrato->calcolaArea();
?>