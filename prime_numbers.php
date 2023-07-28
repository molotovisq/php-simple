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

