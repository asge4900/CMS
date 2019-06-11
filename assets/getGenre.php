<?php 
    require_once "connect.php";

    //Brugte GROUP_CONCAT for at få genre på en linje
    $statement = $dbh->prepare("SELECT * FROM genre");
    $statement->execute();
    
    while ($row = $statement->fetch()) {        
        ?>             
             <input type="checkbox" class="form-check-input" id="genre" name="genre[]" value="<?php echo $row['genreName']; ?>"><?php echo $row['genreName']; ?> <br>
        <?php
    }
?>