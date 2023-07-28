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

echo "Enter a phrase: ";
$sentence = trim(fgets(STDIN));

$vowel_count = count_vowels($sentence);
echo "Has " . $vowel_count . " vowel(s).\n";
?>
