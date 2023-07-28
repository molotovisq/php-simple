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

echo "First number: ";
$n1 = (float)fgets(STDIN);
echo "Operator: ";
$op = trim(fgets(STDIN));
echo "Second number: ";
$n2 = (float)fgets(STDIN);

echo "Result: " . calc($n1, $op, $n2) . "\n";
