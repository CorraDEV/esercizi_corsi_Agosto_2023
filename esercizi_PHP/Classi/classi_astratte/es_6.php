<?php
    abstract class Forma{
        abstract public function disegna();        
    }
    class Cerchio2 extends Forma {
        public function disegna() {
            echo "Cerchio disegnato";
        }
    }
    
    $c = new Cerchio2();
    $c->disegna();
?>