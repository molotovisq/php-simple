<?php
function investment_return($initial_capital, $interest_rate, $investment_time) {
    $final_value = $initial_capital * pow(1 + $interest_rate, $investment_time);

    return $final_value;
}
echo "Initial capital: ";
$initial_capital = (float) fgets(STDIN);

echo "Interest rate (as decimal): ";
$interest_rate = (float) fgets(STDIN);

echo "Investment time (in months): ";
$investment_time = (int) fgets(STDIN);

$final_value = investment_return($initial_capital, $interest_rate, $investment_time);
echo "Final value: " . $final_value . "\n";
?>
