<?php
session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}

require "header.php";

?>
<main>
    <form id="register" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label for="formUsername">Indtast brugernavn:</label>
            <input type="text" class="form-control" id="formUsername" placeholder="Indtast brugernavn" name="formUsername" required>
        </div>
        <div class="form-group">
            <label for="formEmail">Indtast email:</label>
            <input type="email" class="form-control" id="formEmail" placeholder="Indtast email" name="formEmail" required>
        </div>
        <div class="form-group">
            <label for="formPass1">Indtast adgangskode:</label>
            <input type="password" class="form-control" id="formPass1" placeholder="Indtast adgangskode" name="formPass1" required>
        </div>
        <div class="form-group">
            <label for="formPass2">Bekræft adgangskode:</label>
            <input type="password" class="form-control" id="formPass2" placeholder="Bekræft adgangskode" name="formPass2" required>
        </div>
        <input type="submit" value="Opret bruger">
    </form>
</main>
<?php
    if (isset($_POST['formUsername'])) {
        $formUsername = $_POST['formUsername'];
        $formEmail =$_POST['formEmail'];
        $formPass1 = $_POST['formPass1'];
        $formPass2 = $_POST['formPass2'];

        require "assets/connect.php";

        $statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ?");
        $statement->bindParam(1, $formUsername);
        $statement->execute();

        if ($row = $statement->fetch()) {
            echo "<p>Fejl - der findes allerede en bruger med samme navn?</p>";

        } elseif ($formPass1 != $formPass2) {
            echo "<p>Fejl - adgangskoden er ikke den samme?</p>";

        } else {
            echo "<p>Du er nu oprettet</p>";
            $statement = $dbh->prepare("INSERT INTO users(dbUsername, dbPass, dbEmail) VALUES(?, ?, ?)");
            $statement->bindParam(1, $formUsername);
            $statement->bindParam(2, $formPass1);
            $statement->bindParam(3, $formEmail);
            $statement->execute();


        }
   }
?>


