<?php
    class Veicolo{
        public function accelera(){
            echo "Veicolo in accelerazione\n";
        }
    }
    class Automobile extends Veicolo{
        public function accelera(){
            echo "Automobile in accelerazione\n";
        }
    }
    class Moto extends Veicolo{
        public function accelera(){
            echo "Moto in accelerazione\n";
        }
    }
    $veicolo = new Veicolo();
    $veicolo->accelera();
    $automobile = new Automobile();
    $automobile->accelera();
    $moto = new Moto();
    $moto->accelera();
?>