<?php

function count_vowels($string) {
    $string = strtolower($string);
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

?>
