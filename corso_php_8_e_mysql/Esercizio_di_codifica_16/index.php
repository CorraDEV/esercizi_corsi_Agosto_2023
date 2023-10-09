<?php
    function showFavoriteColors(string ...$colors){
        $result = implode(', ', $colors);
        return "I tuoi colori preferiti sono: $result";
    }

    echo showFavoriteColors('red', 'yellow');
?>