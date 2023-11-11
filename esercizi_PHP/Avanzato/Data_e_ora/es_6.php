<?php
$prima_data = new DateTime();
$seconda_data = new DateTime('11-10-2023');
$differenza_giorni = $prima_data->diff($seconda_data)->days;
echo $differenza_giorni;
?>