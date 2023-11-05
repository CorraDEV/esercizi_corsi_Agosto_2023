<?php
    abstract class FiguraGeometrica{
        abstract public function calcolaArea();         
    }

    class Quadrato extends FiguraGeometrica{
        private $lato;                        
        public function getLato(){
            return $this->lato;
        }
        public function setLato($lato){
            $this->lato = $lato;
        }
        public function calcolaArea(){
            return $this->lato * $this->lato;
        }        
    }
    
    $q = new Quadrato();
    $q->setLato(7);    
    echo "area: ".$q->calcolaArea();
?>