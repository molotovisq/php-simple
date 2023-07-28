<?php
function is_palindrome($word) {
    $cleaned_word = strtolower($word);
  
    return $cleaned_word === strrev($cleaned_word);
}

echo "Insert a word: ";
$word = trim(fgets(STDIN));

if (is_palindrome($word)) {
    echo "\"" . $word . "\" is a palindrome.\n";
} else {
    echo "\"" . $word . "\" not is a palindrome.\n";
}
?>
