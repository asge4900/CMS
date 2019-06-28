<?php
    session_start();
    $title = $_POST['title'];
    $imgSrc = $_POST['imgSrc'];
    $imgAlt = $_POST['imgAlt'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $authorId = $_SESSION['id'];
    // $genreString = "";
    // foreach( $_POST["genre"] as $genre){
    //     $genreString = $genreString . "INSERT INTO productgenre (productId, genreId)
    // VALUES(@last_productID, ".$genre.");";}

    // echo $genreString;
    // $lastId = $dbh->lastInsertId();

    require_once "connect.php";
    $statement = $dbh->prepare("BEGIN; INSERT INTO products (title, imgSrc, imgAlt, content, price, authorId) VALUES(?, ?, ?, ?, ?, ?)
    SELECT LAST_INSERT_ID() INTO @last_productId; ".$genreString." COMMIT;");

    $statement = $dbh->prepare("INSERT INTO products (title, imgSrc, imgAlt, content, price, authorId) VALUES(?, ?, ?, ?, ?, ?)");

    $statement->bindParam(1, $title);
    $statement->bindParam(2, $imgSrc);
    $statement->bindParam(3, $imgAlt);
    $statement->bindParam(4, $content);
    $statement->bindParam(5, $price);
    $statement->bindParam(6, $authorId);
    // foreach ($genre as $key => $value) {
    //    $statement->bindParam($key, $value);
    // }
    $statement->execute();




// BEGIN;
// INSERT INTO products (title, imgSrc, imgAlt, content, price, authorId)
// 	VALUES('bro', 'https://bit.ly/2K6TKWE', 'bro', 'bro', 45.48, 1);
//     SELECT LAST_INSERT_ID() INTO @last_productId;
// INSERT INTO productgenre (productId, genreId)
// 	VALUES(@last_productID, 1);
// INSERT INTO productgenre (productId, genreId)
// 	VALUES(@last_productID, 2);
// COMMIT;



// https://thisinterestsme.com/php-pdo-transaction-example/
// try{

//     //We start our transaction.
//     $pdo->beginTransaction();


//     //Query 1: Attempt to insert the payment record into our database.
//     $sql = "INSERT INTO payments (user_id, amount) VALUES (?, ?)";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute(array(
//             $userId,
//             $paymentAmount,
//         )
//     );

//     //Query 2: Attempt to update the user's profile.
//     $sql = "UPDATE users SET credit = credit + ? WHERE id = ?";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute(array(
//             $paymentAmount,
//             $userId
//         )
//     );

//     //We've got this far without an exception, so commit the changes.
//     $pdo->commit();

// }
// //Our catch block will handle any exceptions that are thrown.
// catch(Exception $e){
//     //An exception has occured, which means that one of our database queries
//     //failed.
//     //Print out the error message.
//     echo $e->getMessage();
//     //Rollback the transaction.
//     $pdo->rollBack();
// }