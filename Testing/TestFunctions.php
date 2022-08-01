<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class TestFunctions extends TestCase {
    public function testSuccessDisplayBooks()
    {
        //expected result of the test
        $expected = '<p>Name: ' . "book" . '</p>' . '<p>Country: ' . "narnia" . '</p>' . '<p>Book Rating: ' . 4 . '</p>' . '<p>Destination Rating: ' . 5 . '</p>' . '<p>Published: ' . 2002 . '</p><br><br>';
        //input for the test to get the result
        $testInput1 = [['bookName' => "book", 'country' => "narnia", 'bookRating' => 4, 'destinationRating' => 5, 'year' => 2002]];
        //run the real function with the input
        $case = displayBooks($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

   public function testFailureDisplayBooks()
    {
        //expected result of the test
        $expected = 'You have no books in your collection';
        //input for the test to get the result
        $testInput1 = [];
        //run the real function with the input
        $case = displayBooks($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayBooks()
    {
        //input for the test to get the result
        $testInput1 = 12;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = displayBooks($testInput1);
        
    }
} 