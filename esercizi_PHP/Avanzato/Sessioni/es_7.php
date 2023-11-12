<?php
session_start();
if(isset($_SESSION['visits'])){
    $_SESSION['visits']++;
}
else{
    $_SESSION['visits'] = 1;
}
echo $_SESSION['visits'];
?>