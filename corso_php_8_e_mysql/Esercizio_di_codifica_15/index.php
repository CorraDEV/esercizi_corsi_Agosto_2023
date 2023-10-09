<?php
    function calculateCylinderVolume($radius, $height){
        return pi() * $radius**2 * $height;
    }
    
    echo calculateCylinderVolume(3, 2);
?>