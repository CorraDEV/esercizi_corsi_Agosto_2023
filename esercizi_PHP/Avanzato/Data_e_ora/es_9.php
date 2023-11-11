<?php
$data_oggi = new Datetime();
$giorni_aggiuntivi = 6;
$nuova_data = $data_oggi->modify("+$giorni_aggiuntivi days");
echo $nuova_data->format('d-m-Y');
?>