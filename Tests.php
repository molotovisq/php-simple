<?php

use PHPUnit\Framework\TestCase;

require 'simple_calculator.php'; 
require 'prime_numbers.php';
require 'factorial.php';
require 'palindrome.php';
require 'table.php';
require 'vowels.php';
require 'grade_average.php';
require 'investment_return.php';

class Tests extends TestCase
{
    public function test_calc()
    {
        $this->assertEquals(5, calc(2, '+', 3));
        $this->assertEquals(-1, calc(2, '-', 3));
        $this->assertEquals(6, calc(2, '*', 3));
        $this->assertEquals(2, calc(6, '/', 3));
        $this->assertEquals("Division by zero not is allowed", calc(6, '/', 0));
        $this->assertEquals("Invalid operator!", calc(2, '%', 3));
    }

    public function test_find_n_primes()
    {
        $expectedPrimes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
        $this->assertEquals($expectedPrimes, find_n_primes(10));
    }

    // Function to test the factorial function
    public function test_factorial()
    {
        $this->assertEquals(1, factorial(0));
        $this->assertEquals(1, factorial(1));
        $this->assertEquals(6, factorial(3));
        $this->assertEquals(24, factorial(4));
        $this->assertEquals(120, factorial(5));

        // Testing the factorial function with a negative number
        try {
            factorial(-1);
            $this->fail("Expected exception was not thrown.");
        } catch (\Exception $e) {
            $this->assertInstanceOf(\Exception::class, $e);
        }
    }

    public function test_is_palindrome()
    {
        $this->assertTrue(is_palindrome('radar'));
        $this->assertTrue(is_palindrome('level'));
        $this->assertTrue(is_palindrome('deified'));
        $this->assertTrue(is_palindrome('rotator'));
        $this->assertTrue(is_palindrome('Madam'));
        $this->assertTrue(is_palindrome('Racecar'));
        $this->assertTrue(is_palindrome('MaDaM'));

        $this->assertFalse(is_palindrome('hello'));
        $this->assertFalse(is_palindrome('world'));
        $this->assertFalse(is_palindrome('openai'));
    }

    public function test_mult_table()
    {
        $number = 5;
        $expectedOutput = "5 x 1 = 5\n5 x 2 = 10\n5 x 3 = 15\n5 x 4 = 20\n5 x 5 = 25\n5 x 6 = 30\n5 x 7 = 35\n5 x 8 = 40\n5 x 9 = 45\n5 x 10 = 50\n";

        ob_start();
        mult_table($number);
        $output = ob_get_clean();

        $this->assertEquals($expectedOutput, $output);
    }

    public function test_count_vowels()
    {
        $this->assertEquals(2, count_vowels('Hello'));
        $this->assertEquals(4, count_vowels('developer'));
        $this->assertEquals(5, count_vowels('education'));
        $this->assertEquals(2, count_vowels('trinity'));

        $this->assertEquals(0, count_vowels(''));

        $this->assertEquals(0, count_vowels('stmdt'));
    }

    public function test_grade_average()
    {
        $this->assertEquals(8.4, grade_average([8, 9, 8, 8, 9]));
        $this->assertEquals(7, grade_average([6, 8, 7, 7, 7]));
        $this->assertEquals(9.0, grade_average([9, 9, 9, 9, 9]));
        $this->assertEquals(6.2, grade_average([5, 7, 6, 7, 6]));

        $this->assertEquals(0, grade_average([]));
        
    }

    public function test_investment_return()
    {
        $this->assertEquals(1000, investment_return(1000, 0, 1));
        $this->assertEquals(2000, investment_return(1000, 1, 1)); 
        $this->assertEquals(1500, investment_return(1000, 0.5, 1)); 

        $this->assertEquals(0, investment_return(1000, 0.5, -1));
    }
}
