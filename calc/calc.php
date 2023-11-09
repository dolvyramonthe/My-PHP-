<?php
function calc($operator, $number) {
    static $result = 0; // variable statique pour stocker le résultat de la précédente opération
    
    if ($operator == '=') {
        $result = $number; // si l'opérateur est "=", on définit la valeur de la calculatrice
    } else {
        switch ($operator) {
            case '+':
                $result += $number;
                break;
            case '-':
                $result -= $number;
                break;
            case '*':
                $result *= $number;
                break;
            case '/':
                if ($number != 0) {
                    $result /= $number;
                } else {
                    echo "Division by 0!\n";
                }
                break;
            case '%':
                if ($number != 0) {
                    $result %= $number;
                } else {
                    echo "Division by 0!\n";
                }
                break;
        }
    }
    
    return $result;
}
?>
