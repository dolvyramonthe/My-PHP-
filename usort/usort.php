<?php

$args = $argv; 

function compareStrings($a, $b) {
  
    $lengthComparison = strlen($a) - strlen($b);
    
  
    if($lengthComparison != 0) {
        return $lengthComparison;
    }
  
    return strcasecmp($a, $b);
}

usort($args, "compareStrings");


foreach($args as $arg) {
    echo $arg . PHP_EOL;
}
?>
