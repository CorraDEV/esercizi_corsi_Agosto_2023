<?php
    class Cache{
        public static $dati = [];
        public static function salvaDati($chiave, $valore){
            self::$dati[$chiave] = $valore;
        }
    } 
    Cache::salvaDati("user", "Mario");
    Cache::salvaDati("password", "12345");
    $data = Cache::$dati;
    foreach($data as $k => $v){
        echo "$k: $v\n";
    }
?>