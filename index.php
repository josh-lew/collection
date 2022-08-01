<?php

require_once "functions.php";

$db = connectDB();
$books = fetchAllDB($db);

echo displayBooks($books);

$book1 = $books[0];
$book2 = $books[1];
$book3 = $books[2];
$book4 = $books[3];
$book5 = $books[4];
$book6 = $books[5];
$book7 = $books[6];
$book8 = $books[7];


?>

