<?php
function factorial($number) {
    if ($number === 0 || $number === 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

echo "Insert a positive number: ";
$number = (int) fgets(STDIN);

if ($number >= 0) {
    $result = factorial($number);
    echo "$result\n";
} else {
    echo "Insert a positive number\n";
}
?>
