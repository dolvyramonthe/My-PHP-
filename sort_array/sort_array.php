<?php
function sort_array($array) {
    $sorted = false; 
    
    while(!$sorted) {
        $sorted = true; 
        
        for($i = 0; isset($array[$i + 1]); $i++) {
            if($array[$i] > $array[$i + 1]) { 

                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
                
                $sorted = false; 
            }
        }
    }
    
    return $array;
}
?>


