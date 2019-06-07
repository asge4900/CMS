<?php 
    require_once "connect.php";

    //Brugte GROUP_CONCAT for at få genre på en linje
    $statement = $dbh->prepare("SELECT * FROM genre");
    $statement->execute();
    
    while ($row = $statement->fetch()) {        
        ?>
             <option value=""><?php echo $row['genreName']; ?></option>
        <?php
    }
?>