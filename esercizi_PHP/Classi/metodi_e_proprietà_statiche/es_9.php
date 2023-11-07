<?php
    class Contatore{                
        public static $valore;
        public static function azzera(){
            self::$valore = 0;
        }
    }
    
    Contatore::$valore = 5;
    echo "valore contatore prima dell'azzeramento: " . Contatore::$valore . "\n";
    Contatore::azzera();
    echo "valore contatore dopo l'azzeramento: " . Contatore::$valore;
?>