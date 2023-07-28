<?php
function grade_average($grades) {
    $total_grades = count($grades);
    $sum_grades = array_sum($grades);
    return $sum_grades / $total_grades;
}

$grades = array();

echo "Grade of subject 1: ";
$grades[] = (float) fgets(STDIN);

echo "Grade of subject 2: ";
$grades[] = (float) fgets(STDIN);

echo "Grade of subject 3: ";
$grades[] = (float) fgets(STDIN);

$average = grade_average($grades);
echo "Average: " . $average . "\n";
?>
