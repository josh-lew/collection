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
    $query = $db->prepare("SELECT `id`, `imgURL`, `bookName`, `country`, `bookRating`, `destinationRating`, `year` FROM `guidebooks` WHERE `deleted` = 0;");
    $query->execute();
    return $query->fetchAll(); 
}
/**
 * Inserts user submitted data into the database
 *
 * @param [type] $db
 * @param string $userGuideBookName
 * @param string $userCountry
 * @param integer $userBookYear
 * @param integer $userBookRating
 * @param integer $userDestinationRating
 * @param string $userImgURL
 * @return void
 */
function insertAllDB($db, string $userGuideBookName, string $userCountry, int $userBookYear, int $userBookRating, int $userDestinationRating, string $userImgURL) {
    $query = $db->prepare("INSERT INTO `guidebooks` (`imgURL`,`bookName`, `country`, `bookRating`, `destinationRating`, `year`) VALUES (:userImgURL, :userGuideBookName, :userCountry, :userBookRating, :userDestinationRating, :userBookYear);");
    
    $query->bindParam(':userGuideBookName', $userGuideBookName);
    $query->bindParam(':userCountry', $userCountry);
    $query->bindParam(':userBookYear', $userBookYear);
    $query->bindParam(':userBookRating', $userBookRating);
    $query->bindParam(':userDestinationRating', $userDestinationRating);
    $query->bindParam(':userImgURL', $userImgURL);
    
    $query->execute();
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
            $result .= '<p>Published: ' . $book['year'] . '</p><form action="index.php" method="POST"><input type="hidden" name="delete" value="' . $book['id'] . '"><button class="deleteButton">Delete</button></form></div>';
            
        }
        return $result;
    }
    
}

/**
 * Checks the user has entered a value for 'guidebook' and its within the specificed string length.
 *
 * @param string $guidebook
 * @return void
 */
function validateGuidebook(string $guidebook): bool {
    if (strlen($guidebook) <= 50 && strlen($guidebook) > 0) {
        filter_var($guidebook, FILTER_UNSAFE_RAW);
        return true;
    } else {
        return false;
    }
}

/**
 * Checks the user has entered a value for 'country', validates it and confirms its within the specificed string length.
 *
 * @param string $country
 * @return void
 */
function validateCountry(string $country): bool {
    if(strlen($country) <= 20 && strlen($country) > 0) {
        filter_var($country, FILTER_UNSAFE_RAW);
        return true;
    } else {
        return false;
    }
}

/**
 * Checks the user has entered a value for 'year', validates it and confirms its within the specificed time frame.
 *
 * @param integer $year
 * @return void
 */
function validateBookYear(int $year): bool {
    if ($year >= 1850 && $year <= 2022) {
        filter_var($year, FILTER_VALIDATE_INT);
        return true;
    } else {
        return false;
    }
}

/**
 * Checks the user has entered a value for 'book rating', validates it and confirms its within the specificed int range.
 *
 * @param integer $bookRating
 * @return void
 */
function validateBookRating(int $bookRating): bool {
    if ($bookRating <=5 && $bookRating > 0) {
        filter_var($bookRating, FILTER_VALIDATE_INT);
        return true;
    } else {
        return false;
    }
}

/**
 * Checks the user has entered a value for 'destination rating', validates it and confirms its within the specificed int range.
 *
 * @param integer $destinationRating
 * @return void
 */
function validateDestinationRating(int $destinationRating): bool {
    if ($destinationRating <=5 && $destinationRating > 0) {
        filter_var($destinationRating, FILTER_VALIDATE_INT);
        return true;
    } else {
        return false;
    }
}

/**
 * Checks the user has entered a value for 'URL', validates it and confirms its within the specificed string length.
 *
 * @param string $URL
 * @return void
 */
function validateURL(string $URL): bool {
    if (strlen ($URL) < 1000) {
        filter_var($URL, FILTER_VALIDATE_URL);
        return true;
    } else {
        return false;
    }
}

/**
 * Deletes a guidebook - enters a 1 into the delete column in database which is filtered out during the initial fetch request.
 *
 * @param [type] $db
 * @param integer $deleteID
 * @return void
 */
function deleteBook($db, int $deleteID) {
    $query = $db->prepare("UPDATE `guidebooks` SET `deleted` = 1 WHERE `id` = :id;");
    
    $query->bindParam(':id', $deleteID);

    $query->execute();
}


