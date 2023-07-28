<?php
function mult_table($number) {
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result\n";
    }
}
?>
