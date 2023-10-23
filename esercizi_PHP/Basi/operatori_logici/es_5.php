<?php
    $parola = "caravan";
    echo ($parola[0] == 'p' || $parola[strlen($parola)-1] == 'o') ? "$parola inizia con 'p' o finisce con 'o'" : "$parola non inizia con 'p' o finisce con 'o'";    
?>