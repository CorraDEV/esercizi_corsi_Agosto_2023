<?php
    $visits = 1;
    $expire = time() + 86400;

    if(isset($_COOKIE['numberOfVisits']))
        $visits = $_COOKIE['numberOfVisits'] + 1;

    setcookie('numberOfVisits', $visits, $expire);
    echo "numero visite in questa pagina: $visits";
?>