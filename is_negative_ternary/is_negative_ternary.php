<?php
function is_negative_ternary($number) {
    $result = is_numeric($number) ? ($number < 0 ? "True" : "False") : "Le paramètre n'est pas un Int";
    return $result;
}
?>
