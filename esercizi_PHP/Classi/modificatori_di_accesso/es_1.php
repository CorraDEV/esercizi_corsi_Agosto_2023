<?php
    class Persona{
        private $nome;    

        public function setNome($nome){
            $this->nome = $nome;
        }    
        public function getNome(){
            return $this->nome;
        }
    }

    $p = new Persona();
    $p->setNome("Luigi");
    echo $p->getNome();
?>