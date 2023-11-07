<?php
    class Configurazione{
        private static $opzioni = [360, 720, 1080];
        
        public static function get_opzioni(){
            return self::$opzioni;
        }        
    }
    $opt = Configurazione::get_opzioni();
    foreach($opt as $o){
        echo "$o\n";
    }
?>