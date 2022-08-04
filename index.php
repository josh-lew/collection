<?php

require_once "functions.php";

$db = connectDB();

if (isset($_POST['delete']) && is_numeric($_POST['delete'])) {
  $deleteID = deleteBook($db, $_POST['delete']);
}

$books = fetchAllDB($db);
?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
  <title>Guidebooks</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="normalize.css" type="text/css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <nav>
    <div>
      <h1>Josh's Guidebook Collection</h1>
    </div>
  
    <div>
      <a href="addBook.php">Add a Book</a>
    </div>
</nav>

<main>
  <section class="gridContainer">
  <div class="bookGrid">
        <?=  displayBooks($books); ?>
  </div>
  </section>
</main>

</body>

</html>