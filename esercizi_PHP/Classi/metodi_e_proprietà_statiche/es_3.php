<?php
    class Logger{
        private static $livello;
        public static function registra($messaggio){
            if(self::$livello == "debug"){
                echo "Il messaggio: ".$messaggio."\nè stato registrato";
            }
            else{
                echo "Messaggio non registrato";
            }
        }
        public static function getLivello(){
            return self::$livello;
        }
        public static function setLivello($livello){
            self::$livello = $livello;
        }
    }
    $msg = "Hello World!";
    Logger::setLivello("debug");
    echo "livello: ".Logger::getLivello()."\n";
    Logger::registra($msg);
?>