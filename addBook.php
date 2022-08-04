<?php

require_once "functions.php";

if (isset ($_POST['submitGuidebook'])) {
    $userGuideBookName = $_POST['guidebookName'];
    $userCountry = $_POST['country'];
    $userBookYear = $_POST['yearPublished'];
    $userBookRating = $_POST['guidebookRating'];
    $userDestinationRating = $_POST['destinationRating'];
    $userImgURL = $_POST['imgURL'];

    if ($userImgURL == '') {
        $userImgURL = 'https://static.vecteezy.com/system/resources/previews/002/398/513/original/blank-book-cover-free-vector.jpg';
    }

    $validateBook = validateGuidebook($userGuideBookName);
    $validateCountry = validateCountry($userCountry);
    $validateYear = validateBookYear($userBookYear);
    $validateBookRating = validateBookRating($userBookRating);
    $validateDestinationRating = validateDestinationRating($userDestinationRating);
    $validateURL = validateURL($userImgURL);


    if ($validateBook && $validateCountry && $validateYear  && $validateBookRating && $validateDestinationRating && $validateURL) {

    $db = connectDB();
    $insertDB = insertAllDB($db, $userGuideBookName, $userCountry, $userBookYear, $userBookRating, $userDestinationRating, $userImgURL);
    

  } else {
      echo 'Please add all the specified guidebook details';
  }
}
?>

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
  
    <div class="pageLink">
      <a href="index.php">Return</a>
    </div>
</nav>
    <main>
      <div class="bookFormContainer">
        <section class="bookForm">
            <form action="addBook.php" method="post">
                <label>Guidebook Name:</label><br>
                <input type="text" name="guidebookName" value=""/><br>

                <label>Country:</label><br>
                <input type="text" name="country" value=""/><br>

                <label>Year Published:</label><br>
                <input type="number" name="yearPublished" min="1850" max="2022" value=""/><br>

                <label>Guidebook Rating:</label><br>
                <input type="number" name="guidebookRating" min="0" max="5" value=""/><br>

                <label>Destination Rating:</label><br>
                <input type="number" name="destinationRating" min="0" max="5" value=""/><br>

                <label>Image Url:</label><br>
                <input type="text" name="imgURL" value=""/><br>
                
                <input type="submit" name="submitGuidebook" value="submit"/>

            </form>
            <img src="https://cdn.emojidex.com/emoji/seal/%E5%85%AB%E5%92%AB%E7%83%8F.png?1421323989">
        </section>
      </div>
    </main>

</body>