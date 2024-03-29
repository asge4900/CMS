<?php

    $formName = $_POST['formName'];
    $formPass = $_POST['formPass'];

    require_once "connect.php";

    $statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPass = ?");
    $statement->bindParam(1, $formName);
    $statement->bindParam(2, $formPass);
    $statement->execute();


    if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        session_start();
        $_SESSION['username'] = $row['dbUsername'];
        $_SESSION['accessLevel'] = $row['accessLevel'];
        $_SESSION['id'] = $row['userId'];
        header("location: ../index.php");
    } else {
        header("location: ../index.php?error=error");
    }

