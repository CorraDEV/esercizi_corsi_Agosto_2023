<?php
    class Utente{
        private $user;
        
        public function getUser(){
            return $this->user;
        }
        public function setUser($user){
            $this->user = $user;
        }
    }
    $u = new Utente();    
    $u->setUser("Sandro");
    echo $u->getUser();
?>