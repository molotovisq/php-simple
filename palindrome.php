<?php
function is_palindrome($word) {
    $cleaned_word = strtolower($word);
  
    return $cleaned_word === strrev($cleaned_word);
}

?>
