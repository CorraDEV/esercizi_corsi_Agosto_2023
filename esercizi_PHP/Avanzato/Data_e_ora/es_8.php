<?php
$data_oggi = new Datetime();
$data_ieri = $data_oggi->modify('-1 day');
echo $data_ieri->format('d-m-Y');
?>