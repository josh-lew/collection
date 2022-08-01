<?php

require_once "functions.php";

$db = connectDB();
$books = fetchAllDB($db);

// echo displayBooks($books);



?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
<title>Guidebooks</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section>
        <h1>Josh's Guidebook Collection</h1>
    </section>
  <div class="bookGrid">
        <?=  displayBooks($books); ?>
  </div>
</body>

</html>