<?php
function calc($first, $operator, $second)
{

    switch ($operator) {
        case '+':
            return $first + $second;
        case '-':
            return $first - $second;
        case '*':
            return $first * $second;
        case '/':
            if ($second != 0) {
                return $first / $second;
            } else {
                return "Division by zero not is allowed";
            }
        default:
            return "Invalid operator!";
    }
}

