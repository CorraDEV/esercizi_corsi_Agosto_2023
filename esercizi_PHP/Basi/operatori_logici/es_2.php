<?php
    $parola = "salve";    
    echo (str_contains($parola,"a") && str_contains($parola,"b")) ? "$parola contiene la lettera 'a' e la lettera 'b'" : "$parola non contiene la lettera 'a' o la lettera 'b'";    
?>