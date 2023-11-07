<?php
    class Contatore{
        public static $valore;
        public static function incrementa(){
            self::$valore++;
        }        
    }    

    Contatore::incrementa();
    Contatore::incrementa();    
    echo Contatore::$valore;
?>