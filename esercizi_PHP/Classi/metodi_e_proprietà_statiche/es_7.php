<?php
    class Utente{
        public static $ruolo;
        public static function verificaAccesso(){
            if(self::$ruolo === "admin"){
                echo "l'utente ha accesso alle risorse private";
            }
            else{
                echo "l'utente non ha accesso alle risorse private";
            }
        }
        public static function setRuolo($ruolo){
            self::$ruolo = $ruolo;
        }
    }
    Utente::$ruolo = "admin";
    Utente::verificaAccesso();
?>