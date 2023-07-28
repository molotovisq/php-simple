<?php
function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function find_n_primes($n) {
    $primes = [];
    $number = 2;

    while (count($primes) < $n) {
        if (is_prime($number)) {
            $primes[] = $number;
        }
        $number++;
    }

    return $primes;
}

$first_ten_primes = find_n_primes(10);

foreach ($first_ten_primes as $prime) {
    echo $prime . " ";
}
echo "\n";
