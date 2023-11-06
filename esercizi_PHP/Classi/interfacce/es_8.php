<?php
    interface Autenticabile{
        public function autentica($username, $password);
    }

    class Utente implements Autenticabile{
        public function autentica($username, $password){
            echo "utente con le seguente credenziali:\nusername: $username\npassword: $password\nè stato autenticato\n";
        }
    }
    $user = new Utente();
    $user->autentica("Rossi","12345");
?>