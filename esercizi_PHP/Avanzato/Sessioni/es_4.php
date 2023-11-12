<?php
session_start();
if(isset($_SESSION['username'])){
    echo "variabile di sessione esiste";
}
else{
    echo "variabile di sessione non esiste";
}
?>