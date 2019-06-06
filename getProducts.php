<?php 
    require_once "connect.php";

    $statement = $dbh->prepare("SELECT * FROM products");
    $statement->execute();

    while ($row = $statement->fetch()) {
        $date = new DateTime($row['published']);
        ?>
       <h2><?php echo $row['title']; ?></h2>
        <img src="<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgAlt']; ?>">
        <p><?php echo $row['content']; ?></p>
        <p>Pris: <?php echo $row['price']; ?> kr.</p>
        <p>Genre: fix mig</p>
        <p>Oprettelsesdato: <?php echo $date->format('d-m-Y'); ?></p>
        <p>Forfatter: <?php echo $row['authorId']; ?></p>
        <button>Køb</button>
        <?php
    }
?>