<?php
    interface Serializable2{
        public function serialize();
        public function unserialize($data);
    }
    class Oggetto implements Serializable2{
        public function serialize(){
            echo "serializing...\n";
        }
        public function unserialize($data){
            echo "unserialize $data\n";
        }
    }

    $o = new Oggetto();
    $o->serialize();
    $o->unserialize("random data");
?>