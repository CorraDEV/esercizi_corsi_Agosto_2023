<?php
    $expire = time() + 86400;
    setcookie('username', 'Luigi', $expire, '/', '', false, true);
?>