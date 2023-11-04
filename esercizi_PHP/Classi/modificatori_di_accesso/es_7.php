<?php
    class Computer{
        private $marca;
        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
    }
    $c = new Computer();
    $c->setMarca("Acer");
    echo $c->getMarca();
?>