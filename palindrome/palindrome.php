<?php
function palindrome($str) {

    $cleaned_str = strtolower(str_replace(' ', '', $str));

    $reversed_str = strrev($cleaned_str);

    if ($cleaned_str === $reversed_str) {
        echo "True\n";
    } else {
        echo "False\n";
    }
}
?>
