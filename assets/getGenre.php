<?php
    require_once "connect.php";

    //Brugte GROUP_CONCAT for at få genre på en linje
    $statement = $dbh->prepare("SELECT * FROM genre WHERE NOT genreName = 'Andet' ORDER BY genreName");
    $statement->execute();

    while ($row = $statement->fetch()) {
        ?>
             <input type="checkbox" class="form-check-input" id="genre" name="genre[]" value="<?php echo $row['genreId']; ?>"><?php echo $row['genreName']; ?> <br>
        <?php
    }
