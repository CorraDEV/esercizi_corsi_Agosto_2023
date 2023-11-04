<?php
    class Automobile{
        private $marca;
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function getMarca(){
            return $this->marca;
        }
    }

    $a = new Automobile();
    $a->setMarca("Ferrari");
    echo $a->getMarca();
?>