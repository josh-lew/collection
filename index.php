<?php

require_once "functions.php";

$db = connectDB();
$books = fetchAllDB($db);

echo displayBooks($books);



?>

