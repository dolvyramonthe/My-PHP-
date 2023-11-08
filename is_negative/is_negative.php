<?php
function is_negative($number) {
    if (is_numeric($number)) {
        if ($number < 0) {
            echo "True\n";
        } else {
            echo "False\n";
        }
    } else {
        echo "Le paramètre n'est pas un Int\n";
    }
}
?>

