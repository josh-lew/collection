<?php

require_once "functions.php";

$db = new PDO('mysql:host=db; dbname=CollectionGB', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `bookName`, `country`, `bookRating`, `destinationRating`, `year` FROM `guidebooks`;");
$query->execute();

$books = $query->fetchAll();

// echo '<pre>';
// var_dump($books);
// echo '</pre>';


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

