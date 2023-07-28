<?php
function factorial($number) {
    if ($number < 0) {
        throw new \InvalidArgumentException("Factorial is not defined for negative numbers.");
    }
    
    if ($number === 0 || $number === 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

?>
