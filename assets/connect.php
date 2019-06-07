<?php
    $servername = "localhost";
    $dbName = "webshop";
    $username = "root";
    $password = "";

    try {
        $dbh = new PDO("mysql:host=$servername;dbname=$dbName; charset=utf8", $username, $password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOExeption $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    

    
?>