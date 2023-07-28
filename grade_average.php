<?php
function grade_average($grades) {

    if(empty($grades)){
        return 0;
    }

    $total_grades = count($grades);
    $sum_grades = array_sum($grades);
    return $sum_grades / $total_grades;
}

?>
