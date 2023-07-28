<?php
function investment_return($initial_capital, $interest_rate, $investment_time) {
    if($investment_time < 0){
        return 0;
    }

    $final_value = $initial_capital * pow(1 + $interest_rate, $investment_time);

    return $final_value;
}

?>