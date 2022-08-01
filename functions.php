<?php


/**
 * Takes data from the database and separates it out 
 *  into individual books and echos them out.
 * @param array $books
 * @return void
 */

function displayBooks(array $books) {
    $result = '';

    if (count($books) < 1) {
        $noBooks = 'You have no books in your collection';
        return $noBooks;

    } else {
        
        foreach ($books as $book) {
        
            $result .= '<p>Name: ' . $book['bookName'] . '</p>';
            $result .= '<p>Country: ' . $book['country'] . '</p>';
            $result .= '<p>Book Rating: ' . $book['bookRating'] . '</p>';
            $result .= '<p>Destination Rating: ' . $book['destinationRating'] . '</p>';
            $result .= '<p>Published: ' . $book['year'] . '</p><br><br>';
        }
        return $result;
    }
    
}