<?php 
    require_once "connect.php";

    //Brugte GROUP_CONCAT for at få genre på en linje
    $statement = $dbh->prepare("SELECT products.*, author.authorName, GROUP_CONCAT(genre.genreName SEPARATOR ', ') as genre from products JOIN author on products.authorId = author.authorId JOIN productgenre on products.productId = productgenre.productId JOIN genre on genre.genreId = productgenre.genreId GROUP by products.productId");
    $statement->execute();
    
    while ($row = $statement->fetch()) {
        $date = new DateTime($row['published']);
        ?>
            <article class="col-4">
                <h2><?php echo $row['title']; ?></h2>
                <img src="<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgAlt']; ?>">
                <p><?php echo $row['content']; ?></p>
                <p>Pris: <?php echo $row['price']; ?> kr.</p>
                <p>Genre: <?php echo $row['genre']; ?></p>
                <p>Oprettelsesdato: <?php echo $date->format('d-m-Y'); ?></p>
                <p>Forfatter: <?php echo $row['authorName']; ?></p>
                <button>Køb</button>
            </article>
        <?php
    }
?>