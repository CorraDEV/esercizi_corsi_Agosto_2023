<?php
    class Cerchio{
        private $raggio;
        public function __construct($raggio){
            $this->raggio = $raggio;
        }
        public function calcolaArea(){
            return $this->raggio * $this->raggio * pi();
        }
        public function calcolaPerimetro(){
            return 2 * $this->raggio * pi();
        }
    }

    $c = new Cerchio(4.5);
    echo "area: ".number_format($c->calcolaArea(), 2)."\n";
    echo "perimetro: ".number_format($c->calcolaPerimetro(), 2);
?>