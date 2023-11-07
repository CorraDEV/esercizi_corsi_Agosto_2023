<?php
    class Database{
        public static $connessione;
        public static function connetti(){
            if(self::$connessione === true){
                echo "Database connesso";
            }
            else{
                echo "Database non connesso";
            }
        }
        public static function setConnessione($connessione){
            self::$connessione = $connessione;
        }
        public static function getConnessione(){
            return self::$connessione;
        }
    }
    Database::$connessione = true;
    Database::connetti();    
?>