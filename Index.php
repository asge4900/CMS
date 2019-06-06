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
        <li class="nav-item"><a class="nav-link active" href="Index.php">Forside</a></li>
        <li class="nav-item"><a class="nav-link" href="Shop.php">Shop</a></li>
        <li class="nav-item">
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="defaultForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                            </div>

                            <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="defaultForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default">Login</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
            <a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Log ind</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Page 2</a></li>
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
<main class="">
    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Altid lave priser og hurtig levering!</h1>                 
        </div>
    </div>       
</main>  
<footer class="mt-5">
    <div class="row m-0">
        <div class="col-lg-6">
            <h4>Kontakt</h4>
            <ul>
                <li>Navn A/S</li>
                <li>Gade</li>
                <li>By</li>
                <li><a href="mailto:kundeservice@navn.dk">kundeservice@navn.dk</a></li>
                <li><a href="tel:+45 70 27 85 05">Tlf: 70 27 85 05</a></li>
                <li>CVR: 25 79 45 83</li>
            </ul>
        </div>
        <div class="col-lg-6 col-sm-6">
            <h4>Kundeservice</h4>
            <ul>
               <li><a href="">Kontakt Kundeservice</a></li>
               <li><a href="">Ofte stillede spørgsmål</a></li>
               <li><a href="">Altid 30 dages returret</a></li>
               <li><a href="">Ordrestatus</a></li>
               <li><a href="">Returblanket</a></li>
               <li><a href="">Handesbetingelser</a></li>               
            </ul>
        </div>        
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>