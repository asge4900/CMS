<?php
    require_once "connect.php";

    //Brugte GROUP_CONCAT for at få genre på en linje
    $statement = $dbh->prepare("SELECT products.*, users.*, GROUP_CONCAT(genre.genreName SEPARATOR ', ') as genre from products JOIN users on products.authorId = users.userId LEFT JOIN productgenre on products.productId = productgenre.productId LEFT JOIN genre on genre.genreId = productgenre.genreId GROUP by products.productId");
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
                <p>Forfatter: <?php echo $row['dbUsername']; ?></p>
                <button>Køb</button><br>

                <?php
                    if ($_SESSION['accessLevel'] == 1){ ?>
                        <a href="deleteProduct.php?id='<?php echo $row['productId']; ?>'">Slet mig</a>
                    <?php
                    } elseif ($_SESSION['accessLevel'] == 2 && $row['dbUsername'] == $_SESSION['username']) { ?>
                        <a href="deleteProduct.php?id='<?php echo $row['productId']; ?>'">Slet mig</a>
                    <?php
                    }
                ?>
            </article>
        <?php
    }
