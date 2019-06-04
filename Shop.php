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
        <li class="nav-item"><a class="nav-link" href="Index.php">Forside</a></li>
        <li class="nav-item"><a class="nav-link active" href="Shop.php">Shop</a></li>
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
<main class="row m-0">
    <article class="col-4">
        <h2>Crash Team Racing Nitro-Fueled - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/c/r/crash-team-racing-nitro-fueled_432009.jpg" alt="">
        <p>Crash er tilbage i førersædet og er klar til at køre om kap med alle hans modstandere. Start din motor op og gør dig klar på at prøve kræfter med de originale spiltilstande, karakterer, baner, powerups og våben, imens du nyder den flotte HD grafik.<br>
        <br>
        Crash Team Racing Nitro-Fueled er en remaster af det originale Crash TM racerspil, og bringer alle karaktererne, banerne og køretøjerne tilbage i flot HD grafik, som med sikkerhed vil tage din gamingoplevelse til det næste niveau.</p>
        <p>Pris: 269,95 kr.</p>
        <p>Genre: Racing</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
    <article class="col-4">
        <h2>Plants Vs. Zombies Garden Warfare 2 - Nordic - Playstation Hits - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/p/l/plants-vs-zombies-garden-warfare-2-nordic-playstation-hits_429081.jpg" alt="">
        <p>Kampen for Suburbia gror til nye højder i Plants vs. Zombies Garden Warfare 2, der er en hylende morsom og actionfyldt shooter, hvor du skal bekæmpe Dr. Zomboss som har forstærket hans horde af zombier og skabt et zombie utopia.<br>
        <br>
        Håbet fortsætter dog, fordi planterne har planer om at udføre en kæmpe offensiv, der går ud på at tage deres jord tilbage. Spil som planter i en helt ny 24 spillers Herbal Assault tilstand, eller vælg din side i 4-spillers co-op eller solo.</p>
        <p>Pris: 139,95 kr.</p>
        <p>Genre: Third Person Shooter</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
    <article class="col-4">
        <h2>Ark: Survival Evolved - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/a/r/ark-survival-evolved_382730.jpg" alt="">
        <p>om en mand eller kvinde strandet nøgen, frossen og sulten på kysten af en mystisk ø kaldet ARK, skal du jage og høste ressourcer, skabe nødvendige værktøjer, dyrke afgrøder og bygge hus til at modstå de udfordringer som vil ramme dig fra alle sider.<br>
        <br>
        Brug din snedighed, samt dine ressourcer til at dræbe eller temme og opdrætte leviathan-dinosaurerne og andre urokkelige væsner, der slentrer rundt på jorden omkring dig.<br>
        <br>
        Lav alliancer med andre spillere online for at overleve. Men husk; stol aldrig på andre end dig selv - man ved aldrig hvem der vil dig ondt...</p>
        <p>Pris: 299,95 kr.</p>
        <p>Genre: Action, Survival</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
    <article class="col-4">
        <h2>A Plague Tale: Innocence - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/a/andet/a-plague-tale-innocence_437223.jpg" alt="">
        <p>A Plague Tale: Innocence fortæller historien om 2 unge søskende, der sammen skal kæmpe for at overleve i en af historiens mørkeste perioder. Dette nye spil fra Asobo Studio sender dig på en følelsesladet rejse gennem Frankrig i det 14. århundrede, med gameplay der kombinerer eventyr, action og stealth. Følg den unge Amicia og hendes lillebror Hugo, der er alene i en ødelagt verden, imens de skal prøve på at offentliggøre en mørk hemmelighed.<br>
        <br>
        De 2 søskende er på flugt fra soldater, og de er omringer af moser og sværme af rotter, som bringer den sorte død med sig. Kan de overkomme disse odds?</p>
        <p>Pris: 329,95 kr.</p>
        <p>Genre: Adventure, Stealth</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
    <article class="col-4">
        <h2>The Lego Movie 2 - Videogame - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/l/e/lego-the-movie-2-the-videogame_433320.jpg" alt="">
        <p>LDe invaderende rumvæsener har efterladt Briksburg i ruiner, og det er nu op til Emmet og en gruppe af helte at rede deres verden og venner fra de mystiske indbyggere i Systar systemet. Spillere skal rejse ud i rummet og opdage nye verdener, samtidig med at de skal teste deres mesterbygningsevner.</p>
        <p>Pris: 259,95 kr.</p>
        <p>Genre: Adventure</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
    <article class="col-4">
        <h2>Call Of Duty: Black Ops 4 - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/c/a/call-of-duty-black-ops-4_418361.jpg" alt="">
        <p>Call of Duty: Black Ops 4 multiplayer hæver standarden og leverer den mest spændende kampoplevelse med fokus på taktisk gameplay og spillervalg.<br>
        <br>
        Spillet tilbyder et nyt niveau af online action på tværs af en række nye våben, kort og modes.<br>
        <br>
        For første gang fungerer multiplayer som centrum for spillets fortælling, da du afdækker en dybere forbindelse til hver specialists rolle og deres unikke spillestile.<br>
        <br>
        Med tilbagevendingen af ​​Pick 10 Create-a-Class-systemet - og i kombination med den nye Gear-kategori - bliver gameplay mere tilpasset end nogensinde, hvilket giver dig mulighed for at vælge hvordan du vil køre dine specialister.<br>
        <br>
        Kombineret med evnen til at låse op for ødelæggende Scorestreaks undervejs, vil du have mulighed for at være farlig alene, eller ustoppelig som del af et hold.</p>
        <p>Pris: 239,95 kr.</p>
        <p>Genre: First Person Shooter</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
    <article class="col-4">
        <h2>Lego Harry Potter Collection - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/l/e/lego-harry-potter-collection_361928.jpg" alt="">
        <p>Denne udgave af Lego Harry Potter indeholder Harry og vennernes oplevelser i alle deres syv år på Hogwarts.<br>
        <br>
        Spillet indeholder alle de syv spil på én disk og indeholder to DLC-ekstrapakker.  </p>
        <p>Pris: 169,95 kr.</p>
        <p>Genre: Action, Adventure</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
    <article class="col-4">
        <h2>GTA 5 / Grand Theft Auto V - PS4</h2>
        <img src="https://content.gucca.dk/covers/big/g/r/grand-theft-auto-v-gta-5_281455.jpg" alt="">
        <p>Udviklet af seriens skaber, Rockstar North, kommer det længe ventede Grand Theft Auto V. Handlingen finder sted i det sydlige Californien i den største og mest blomstrende spil-verden serien nogensinde har set. Spil fans har ventet i spænding, og forventningerne har som altdi været høje - og må siges at blive indfriet, som altid.<br>
        <br>
        Nyd grafikken over den vidtstrakte by Los Santos der strækker sig til toppen af bjergene,  til havets bund- spillet formår at hæve standarden i videospil industrien betydelig.</p>
        <p>Pris: 199,95 kr.</p>
        <p>Genre: Action, Free-Roam</p>
        <p>Oprettelsesdato: 03-06-2019</p>
        <p>Forfatter: Asger</p>
        <button>Køb</button>
    </article>
</main>  
<footer class="mt-5">
    <div class="row d-flex justify-content-around m-0">
        <div class="col-lg-6 col-sm-6">
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