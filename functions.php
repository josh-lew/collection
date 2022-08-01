<?php


/**
 * Connects to database
 *
 * @return PDO
 */
function connectDB(): PDO {
$db = new PDO('mysql:host=db; dbname=CollectionGB', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
return $db;
}

/**
 * Returns all data specified within database query
 *
 * @param [type] $db
 * @return array
 */
function fetchAllDB($db): array {
$query = $db->prepare("SELECT `imgURL`, `bookName`, `country`, `bookRating`, `destinationRating`, `year` FROM `guidebooks`;");
$query->execute();
return $query->fetchAll(); 
}

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
            
            $result .= '<p><img class="gBookImg" src="' . $book['imgURL'] .'"></p>';
            $result .= '<p>Name: ' . $book['bookName'] . '</p>';
            $result .= '<p>Country: ' . $book['country'] . '</p>';
            $result .= '<p>Book Rating: ' . $book['bookRating'] . '</p>';
            $result .= '<p>Destination Rating: ' . $book['destinationRating'] . '</p>';
            $result .= '<p>Published: ' . $book['year'] . '</p></div>';
            
        }
        return $result;
    }
    
}