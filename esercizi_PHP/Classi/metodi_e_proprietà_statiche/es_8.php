<?php
    class Configurazione{
        public static $valori = ["permissions" => "admin", "user" => "Mario", "password" => "abc"];
        public static function impostaValore($chiave, $valore){
            if(array_key_exists($chiave, self::$valori)){
                self::$valori[$chiave] = $valore;
                echo "operazione eseguita con successo: il valore associato a $chiave è stato modificato\n";
            }
            else{
                echo "operazione fallita: la chiave inserita non esiste\n";
            }            
        }
    }
    Configurazione::impostaValore("password", "12345");
    Configurazione::impostaValore("user", "Francesco");
    Configurazione::impostaValore("nazionalità", "Italia");
?>