<?php
$data_nascita = new Datetime("1984-07-15");
$data_oggi = new Datetime();
$age = $data_nascita->diff($data_oggi)->y;
echo $age;
?>