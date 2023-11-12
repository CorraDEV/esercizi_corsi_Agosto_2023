<?php
function stampaStringa($str, $upper){
    echo $upper($str);
}
$trasformaStringa = function($str){
    return strtoupper($str);
};
$stringa = "random text";
stampaStringa($stringa, $trasformaStringa);
?>