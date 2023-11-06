<?php
    interface Suonabile{
        public function suona();
    }
    class Chitarra implements Suonabile{
        public function suona(){
            echo "la chitarra sta suonando...";
        }
    }
    $chitarra = new Chitarra();
    $chitarra->suona();
?>