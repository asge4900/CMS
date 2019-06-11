<?php
    $title = $_POST['title'];
    $imgSrc = $_POST['imgSrc'];
    $imgAlt = $_POST['imgAlt'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $authorId = $_POST['authorId'];
    $genreString = "";
    foreach( $_POST["genre"] as $genre){
        $genreString = $genreString . "INSERT INTO productgenre (productId, genreId)
	VALUES(@last_productID, ".$genre.");";}
    echo $genreString;

    require_once "connect.php";
    $statement = $DBH->prepare("BEGIN; 
                                INSERT INTO products (title, imgSrc, imgAlt, content, price, authorId)
                                    VALUES(?, ?, ?, ?, ?)
                                    SELECT LAST_INSERT_ID() INTO @last_productId;
                                ".$genreString."
                                COMMIT;");
?>



<!-- BEGIN;
INSERT INTO products (title, imgSrc, imgAlt, content, price, authorId)
	VALUES('bro', 'https://bit.ly/2K6TKWE', 'bro', 'bro', 45.48, 1);
    SELECT LAST_INSERT_ID() INTO @last_productId;
INSERT INTO productgenre (productId, genreId)
	VALUES(@last_productID, 1);
INSERT INTO productgenre (productId, genreId)
	VALUES(@last_productID, 2);
COMMIT; -->