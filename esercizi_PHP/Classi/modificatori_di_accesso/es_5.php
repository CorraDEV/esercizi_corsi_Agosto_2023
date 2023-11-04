<?php
    class Prodotto{
        private $prezzo;
        public function getPrezzo(){
            return $this->prezzo;
        }
        public function setPrezzo($prezzo){
            $this->prezzo = $prezzo;
        }
    }
    $p = new Prodotto();
    $p->setPrezzo(20.3);
    echo $p->getPrezzo();
?>