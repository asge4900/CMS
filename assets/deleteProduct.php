<?php

   $id = $_POST['productId'];

    require_once "connect.php";

    $statement = $dbh->prepare("DELETE FROM products WHERE productId = :productId");

    $statement->bindParam(':productId', $id);

    $statement->execute();