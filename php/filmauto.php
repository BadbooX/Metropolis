<?php 
require_once "config.php";
session_start();
$sql = 'SELECT * FROM films WHERE id_films='.$_GET['id_films'].'';
$check = $bdd->prepare($sql);
$check->execute();
$row = $check->fetch();
?>
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
    <title>MétropoliX</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-dark fixed-top">
        <a class="logogonav" href="accueil.php"><img src="../img/logo_m.png" alt=""></a>
        <ul class="navbar-nav mr-auto">
            <li  id="disconnect" class="nav-item"><a href="deconnex.php"><button type="button" class="btn btn-primary">Déconnexion</button></a></li>
        </ul>
    </nav>

    <div class="logo_film">
        <img class="logo_img"src="../img/<?php echo $row['affiche_films'];?>">
    </div>

    <section class='cutmiddle'>
        <div class='mid_container'>
            <div class='midleft'>
                <ul>
                    <h2><span class='coloredweb'>Rés</span>umé</h2>
                    <p>
                        <?php echo $row['resume_films'];?>
                    </p>
                </ul>
            </div>
            <div class='midcenter'>
                <h2><span class='coloredweb'>info</span>rmations</h2>
                <ul>
                    <li>Parution: ??</li>
                    <li>Réalisateur: ??</li>
                </ul>
            </div>
            
            <div class='midright'>
                <h2><span class='coloredweb'>Act</span>eurs</h2>
                <ul>
                    <li>??</li>
                    
                </ul>
            </div>
            
        </div>
    </section>
    <section class="bandeAnnonce">
        <?php echo $row ['bandeannonce_films'];?>
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