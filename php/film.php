<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <title>Metropolix - Le parrain</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-dark fixed-top">
        <a class="logogonav" href="accueil.php"><img src="../img/logo_m.png" alt=""></a>
        <ul class="navbar-nav mr-auto">
            <li  id="disconnect" class="nav-item"><a href="deconnex.php"><button type="button" class="btn btn-primary">Déconnexion</button></a></li>
            
        </ul>
    </nav>

    <div class="logo_film">
        <img src="../img/background_parrain.png" alt="">
    </div>

    <section class='cutmiddle'>
        <div class='mid_container'>
            <div class='midleft'>
                <ul>
                    <h2><span class='coloredweb'>Rés</span>umé</h2>
                    <p>
                        En 1945, à New York, les Corleone sont une des cinq familles de la mafia. Don Vito Corleone, "parrain" de cette famille, marie sa fille à un bookmaker. Sollozzo, " parrain " de la famille Tattaglia, propose à Don Vito une association dans le trafic de drogue, mais celui-ci refuse. Sonny, un de ses fils, y est quant à lui favorable.
                        Afin de traiter avec Sonny, Sollozzo tente de faire tuer Don Vito, mais celui-ci en réchappe. Michael, le frère cadet de Sonny, recherche alors les commanditaires de l'attentat et tue Sollozzo et le chef de la police, en représailles.
                        Michael part alors en Sicile, où il épouse Apollonia, mais celle-ci est assassinée à sa place. De retour à New York, Michael épouse Kay Adams et se prépare à devenir le successeur de son père...
                    </p>
                </ul>
            </div>
            <div class='midcenter'>
                <h2><span class='coloredweb'>info</span>rmations</h2>
                <ul>
                    <li>Parution: 18 octobre 1972</li>
                    <li>Réalisateur: Francis Ford Coppola</li>
                </ul>
            </div>
            
            <div class='midright'>
                <h2><span class='coloredweb'>Act</span>eurs</h2>
                <ul>
                    <li>Marlon Brando</li>
                    <li>Al Pacino</li>
                    <li>James Caan</li>
                </ul>
            </div>
            
        </div>
    </section>
    <section class="bandeAnnonce">
        <iframe width="956" height="538" src="https://www.youtube.com/embed/bmtuIhesQWA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <?php 
        include("footerconected.php");
    ?>
    

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/flashpara.js"></script>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
</body>
</html>