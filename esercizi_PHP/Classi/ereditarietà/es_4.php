<?php
    class Forma2{
        public function calcolaArea(){
            return 0;
        }        
    }
    class Rettangolo extends Forma2{
        private $base;
        private $altezza;
        public function __construct($base, $altezza){ 
            $this->base = $base;
            $this->altezza = $altezza;
        }
        public function calcolaArea(){
            return $this->base * $this->altezza;
        }
    }
    $rett = new Rettangolo(5, 4);
    echo "Area: " . $rett->calcolaArea();
?>