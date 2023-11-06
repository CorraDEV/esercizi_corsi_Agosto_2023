<?php
    interface Database{
        public function connetti();
        public function eseguiQuery($query);
        public function chiudiConnessione();
    }
    class MySQLDatabase implements Database{
        public function connetti(){
            echo "database connesso\n";
        }
        public function eseguiQuery($query){
            echo "eseguita la query:\n".$query;
        }
        public function chiudiConnessione(){
            echo "database disconnesso\n";
        }
    }
    $db = new MySQLDatabase();
    $db->connetti();
    $db->eseguiQuery("SELECT * FROM tabella");
    $db->chiudiConnessione();
?>