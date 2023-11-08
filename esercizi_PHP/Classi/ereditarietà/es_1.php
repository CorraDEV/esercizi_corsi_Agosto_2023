<?php
    class Veicolo4{
        private $marca;
        private $anno;        
        public function __construct($marca, $anno) {
            $this->marca = $marca;
            $this->anno = $anno;
        }
        public function getMarca(){
            return $this->marca;
        }        
        public function getAnno(){            
            return $this->anno;
        }
    }
    class Automobile2 extends Veicolo4{
        public $modello;
        public function __construct($marca, $anno, $modello){
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }
        public function getModello(){
            return $this->modello;
        }
        public function getDescrizione(){
            return "Marca: " . $this->getMarca() . "\nAnno: " . $this->getAnno() . "\nModello: " . $this->modello;
        }
    }
    $auto = new Automobile2("Ferrari", "20-12-2016", "SF16-H");
    echo $auto->getDescrizione();
?>