# PHP Scripts

This repository contains the following PHP scripts: `simple_calculator.php`, `prime_numbers.php`, `factorial.php`, `palindrome.php` , `table.php` , `vowels.php`, `grade_average.php`, , `investment_return.php`.



## Installation (Debian)

1. Clone the repository:
`git clone https://github.com/your-username/your-repository.git`

2. Navigate to the project directory:
`cd your-repository`

3. Install dependencies using [Composer](https://getcomposer.org/) :
`composer install`




## Running Tests

To run the PHPUnit tests, use the following command:

`./vendor/bin/phpunit --testdox Tests.php`
## Documentation

## simple_calculator.php

This script is a simple calculator that takes in three inputs from the user: two numbers and an operator. The script then performs the specified operation on the two numbers and outputs the result.

The script supports the following operators: `+`, `-`, `*`, and `/`. If the user enters an invalid operator, the script will output an error message. If the user attempts to divide by zero, the script will also output an error message.


## prime_numbers.php

This script contains two functions: `is_prime` and `find_n_primes`. The `is_prime` function takes in a number as input and returns a boolean value indicating whether or not the number is prime. The `find_n_primes` function takes in a number `n` as input and returns an array containing the first `n` prime numbers.

The script uses these two functions to find and output the first ten prime numbers.

## factorial.php

This script contains a function called `factorial` that takes in a positive integer as input and returns its factorial. The script prompts the user to enter a positive integer, then calculates and outputs its factorial using the `factorial` function.

If the user enters a negative number, the script will output an error message.

## palindrome.php

This script contains a function called `is_palindrome` that takes in a word as input and returns a boolean value indicating whether or not the word is a palindrome. The script prompts the user to enter a word, then checks if it is a palindrome using the `is_palindrome` function.

If the word is a palindrome, the script will output a message indicating so. Otherwise, it will output a message indicating that the word is not a palindrome.

## table.php

This script contains a function called `mult_table` that takes in a number as input and outputs the multiplication table for that number up to 10. The script prompts the user to enter a number, then generates the multiplication table using the `mult_table` function.

## vowels.php

This script contains a function called `count_vowels` that takes in a string as input and returns the number of vowels in that string. The script prompts the user to enter a phrase, then counts the number of vowels using the `count_vowels` function. The script will output a message indicating the number of vowels in the phrase.

## grade_average.php

This script contains a function called `grade_average` that takes in an array of grades as input and returns the average of those grades. The script prompts the user to enter three grades, then calculates the average using the `grade_average` function. The script will output a message indicating the average of the grades.

## investment_return.php

This script contains a function called `investment_return` that takes in an initial capital, an interest rate, and an investment time as inputs and returns the final value of the investment after that time. The script prompts the user to enter these values, then calculates the final value using the `investment_return` function. The script will output a message indicating the final value of the investment.