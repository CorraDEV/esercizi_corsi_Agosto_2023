<?php
session_start();
if(session_status() === PHP_SESSION_ACTIVE){
    echo "sessione attiva";
}else{
    echo "sessione non attiva";
}
?>