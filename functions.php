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
            
            $result .= '<div class="bookContainer"><p><img class="gBookImg" src="' . $book['imgURL'] .'"></p>';
            $result .= '<p>Name: ' . $book['bookName'] . '</p>';
            $result .= '<p>Country: ' . $book['country'] . '</p>';
            $result .= '<p>Book Rating: ' . $book['bookRating'] . '</p>';
            $result .= '<p>Destination Rating: ' . $book['destinationRating'] . '</p>';
            $result .= '<p>Published: ' . $book['year'] . '</p></div>';
            
        }
        return $result;
    }
    
}

function validateGuidebook($guidebook) {
    if (strlen($guidebook) <= 50) {
        filter_var($guidebook, FILTER_UNSAFE_RAW);
        return true;
    } else {
        return false;
    }
}

function validateCountry(string $country) {
    if(strlen($country) <= 20 ) {
        filter_var($country, FILTER_UNSAFE_RAW);
        return true;
    } else {
        return false;
    }
}

function validateBookYear($year) {
    if ($year >= 1850 && $year <= 2022) {
        filter_var($year, FILTER_VALIDATE_INT);
        return true;
    } else {
        return false;
    }
}

function validateBookRating($bookRating) {
    if ($bookRating <=5 && $bookRating > 0) {
        filter_var($bookRating, FILTER_VALIDATE_INT);
        return true;
    } else {
        return false;
    }
}

function validateDestinationRating($destinationRating) {
    if ($destinationRating <=5 && $destinationRating > 0) {
        filter_var($destinationRating, FILTER_VALIDATE_INT);
        return true;
    } else {
        return false;
    }
}

function validateURL($URL) {
    if (strlen ($URL) < 1000) {
        filter_var($URL, FILTER_VALIDATE_URL);
        return true;
    } else {
        return false;
    }
}


