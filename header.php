<?php
  if(!isset($_SESSION))
  {
      session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content'
        });
  </script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-inverse navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
        <ul class="nav navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Forside</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
        <?php
              if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?><li class="nav-item">
                    <a href='assets/logout.php' class='nav-link'>Log ud</a>
                </li>
                <li class="nav-item">
                    <!-- Addz product -->
                    <div class="modal fade" id="modalAddProductForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <form class="m-auto" action="assets/addProduct.php" method="post">
                                        <div class="form-group">
                                            <label for="title">Indtast title:</label>
                                            <input type="text" class="form-control" id="title" placeholder="Indtast title" name="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="imgSrc">Indtast stien til Billedet:</label>
                                            <input type="text" class="form-control" id="imgSrc" placeholder="Indtast stien til Billedet" name="imgSrc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="imgAlt">Indtast alt tekst til billede:</label>
                                            <input type="text" class="form-control" id="imgAlt" placeholder="Indtast alt tekst til billede" name="imgAlt" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="content">Indtast beskrivelse:</label>
                                            <textarea class="form-control" rows="5" id="content" placeholder="Indtast beskrivelse" name="content" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Indtast pris:</label>
                                            <input type="number" class="form-control" id="price" placeholder="Indtast pris" name="price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="genre">Genre:</label><br>
                                            <div class="form-check genre m-auto">
                                                <?php include "assets/getGenre.php" ?>
                                                <input type="checkbox" class="form-check-input" id="genre" name="genre[]" value="9">Andet <br>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Tilføj produkt">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="" class="nav-link" data-toggle="modal" data-target="#modalAddProductForm">Tilføj product</a>
                    </div>
                </li>
              <?php }
              else { ?>
              <li class="nav-item">
                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Log ind</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="modal-body mx-3" action="assets/login.php" method="post">
                                    <div class="md-form mb-5">
                                    <!-- <i class="fas fa-envelope prefix grey-text"></i> -->
                                    <input type="text" name="formName" id="formName" class="form-control validate" placeholder="Indtast navn" required>
                                    <label data-error="wrong" data-success="right" for="formName">Dit navn</label>
                                    </div>

                                    <div class="md-form mb-4">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" name="formPass" id="formPass" class="form-control validate" placeholder="Indtast kodeord" required>
                                    <label data-error="wrong" data-success="right" for="formPass">Dit kodeord</label>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-center">
                                        <input type="submit" value="Log ind" class="btn btn-default">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href='' class='nav-link' data-toggle='modal' data-target='#modalLoginForm'>Log ind</a>";
                    </div>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Opret bruger</a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="fas fa-search text-white"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
<?php
    if (isset($_SESSION['username'])) {
       echo "<p>Velkommen ".$_SESSION['username']."</p>";
    }
?>