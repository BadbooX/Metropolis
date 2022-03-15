<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <title>Cinémet.fr</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-dark fixed-top" >
        <ul class="navbar-nav mr-auto">
            <li  id="disconnect" class="nav-item"><a href="inscription.php"><button type="button" class="btn btn-primary">S'inscrire</button></a></li>
            <li id="connect" class="nav-item"><a href="connexion.php"><button type="button" class="btn btn-primary">Se connecter</button></a></li>
        </ul>
    </nav>
 
    <section class="corpus">
        
        <div class="logostart">
            <img src="../img/logostart.png" alt="">
        </div>
        
    </section>
    <section class="cinechezvous">
        <div class="boxtalking">
            <h2>Le <span class="coloredweb">cinéma</span> depuis chez vous</h1>
            <hr>
            <p>
                Depuis le 11 novembre 2022 Nous vous proposons nos services de streaming.<br>
                en effet les client disposants du métropass ont un acces à un panel incroyable de séries et films.<br>
                le tout dans l'ensemble du monde
            </p>
        </div>
        <div class="boximg">
            <img class="tv" src="../img/tv.png" alt="">
        </div>
    </section>

    <section class="parallax" id="kaamoulox">
    </section>

    <section class="lemetropolis">
        <div class="secboxtalking">
            <h2>Notre <span class="coloredweb">cinéma</span></h2>
            <hr>
            <p>
                Nous sommes ouvert du lundi au dimanche.<br>
                Notre cinéma est composé de 10 salles de cinéma,<br>
                nous nous situons au 6 Rue Longueville<br>
                08000 Charleville-Mézières<br>
                Région Grand-Est
            </p>
        </div>
        <div class="secboximg">
            <img class="mtr" src="../img/metroplace.jpg" alt="">
        </div>
    </section>

    <?php 
    include("footer.php");
    ?>
    

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/flashpara.js"></script>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
</body>
</html>