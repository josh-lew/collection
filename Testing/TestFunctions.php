<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class TestFunctions extends TestCase {
    public function testSuccessDisplayStars()
    {
        //expected result of the test
        $expected = '<img class="star" src="images/star.png" width:"2px" height:"auto"><img class="star" src="images/star.png" width:"2px" height:"auto"><img class="star" src="images/star.png" width:"2px" height:"auto"><img class="star" src="images/star.png" width:"2px" height:"auto">';
        //input for the test to get the result
        $testInput1 = 4;
        //run the real function with the input
        $case = displayStars($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureDisplayStars()
    {
        //expected result of the test
        $expected = "";
        //input for the test to get the result
        $testInput1 = 0;
        //run the real function with the input
        $case = displayStars($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayStars()
    {
        //input for the test to get the result
        $testInput1 = [1, 2, 3];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = displayStars($testInput1);
    } 
    public function testSuccessDisplayBooks()
    {
        //expected result of the test
        $expected = '<div class="bookContainer"><p><img class="gBookImg" src="https://images-na.ssl-images-amazon.com/images/I/61hGG71AzHL.jpg"></p><h3>book</h3><h4>narnia</h4><p>Book Rating: <br><img class="star" src="images/star.png" width:"2px" height:"auto"></p><p>Destination Rating: <br><img class="star" src="images/star.png" width:"2px" height:"auto"></p><p>2002</p><form action="index.php" method="POST"><input type="hidden" name="delete" value="1"><button class="deleteButton">Delete</button></form></div>';
        //input for the test to get the result
        $testInput1 = [['id' => 1, 'imgURL' => 'https://images-na.ssl-images-amazon.com/images/I/61hGG71AzHL.jpg', 'bookName' => "book", 'country' => "narnia", 'bookRating' => 1, 'destinationRating' => 1, 'year' => 2002]];
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

    public function testSuccessValidateGuidebook()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = "book";
        //run the real function with the input
        $case = validateGuidebook($testInput1, FILTER_UNSAFE_RAW);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateGuidebook()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = "";
        //run the real function with the input
        $case = validateGuidebook($testInput1, FILTER_UNSAFE_RAW);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateGuidebook()
    {
        //input for the test to get the result
        $testInput1 = [1,2,3];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = validateGuidebook($testInput1, FILTER_UNSAFE_RAW);
    } 

    public function testSuccessValidateCountry()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = "Wales";
        //run the real function with the input
        $case = validateCountry($testInput1, FILTER_UNSAFE_RAW);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateCountry()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = "";
        //run the real function with the input
        $case = validateCountry($testInput1, FILTER_UNSAFE_RAW);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateCountry()
    {
        //input for the test to get the result
        $testInput1 = [1, 2, 3];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = validateCountry($testInput1, FILTER_UNSAFE_RAW);
    } 

    public function testSuccessValidateBookYear()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = "1989";
        //run the real function with the input
        $case = validateBookYear($testInput1, FILTER_VALIDATE_INT);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateBookYear()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = "1849";
        //run the real function with the input
        $case = validateBookYear($testInput1, FILTER_VALIDATE_INT);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateBookYear()
    {
        //input for the test to get the result
        $testInput1 = [1, 2, 3];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = validateBookYear($testInput1, FILTER_VALIDATE_INT);
    } 

    public function testSuccessValidateBookRating()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = "5";
        //run the real function with the input
        $case = validateBookRating($testInput1, FILTER_VALIDATE_INT);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateBookRating()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = "12";
        //run the real function with the input
        $case = validateBookRating($testInput1, FILTER_VALIDATE_INT);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateBookRating()
    {
        //input for the test to get the result
        $testInput1 = [1, 2, 3];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = validateBookRating($testInput1, FILTER_VALIDATE_INT);
    } 

    public function testSuccessValidateDestinationRating()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = "5";
        //run the real function with the input
        $case = validateDestinationRating($testInput1, FILTER_VALIDATE_INT);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateDestinationRating()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = "12";
        //run the real function with the input
        $case = validateDestinationRating($testInput1, FILTER_VALIDATE_INT);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateDestinationRating()
    {
        //input for the test to get the result
        $testInput1 = [1, 2, 3];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = validateDestinationRating($testInput1, FILTER_VALIDATE_INT);
    } 

    public function testSuccessValidateURL()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = 'https://static.vecteezy.com/system/resources/previews/002/398/513/original/blank-book-cover-free-vector.jpg';
        //run the real function with the input
        $case = validateURL($testInput1, FILTER_VALIDATE_URL);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateURL()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = "Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada.Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. Pellentesque ipsum. Nulla non arcu lacinia neque faucibus fringilla. Nulla non lectus sed nisl molestie malesuada. Proin in tellus sit amet nibh dignissim sagittis. Vivamus luctus egestas leo. Maecenas sollicitudin. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aliquam erat volutpat. Nunc auctor. Mauris pretium quam et urna. Fusce nibh. Duis risus. Curabitur sagittis hendrerit ante. Aliquam erat volutpat. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Duis condimentum augue id magna semper rutrum. Nullam justo enim, consectetuer nec, ulla";
        //run the real function with the input
        $case = validateURL($testInput1, FILTER_VALIDATE_URL);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateURL()
    {
        //input for the test to get the result
        $testInput1 = [1, 2, 3];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = validateURL($testInput1, FILTER_VALIDATE_URL);
    } 

}



