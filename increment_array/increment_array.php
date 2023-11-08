<?php
function increment_array($array, $increment) {
    
    if (!is_int($increment)) {
        echo "L'increment n'est pas un Int";
        return;
    }

    
    foreach ($array as $index => $value) {
        
        if (!is_int($value)) {
            echo "L'index $index de la case n'est pas un Int";
            return;
        }
        
        $array[$index] = $value + $increment;
    }

    return $array;
}
