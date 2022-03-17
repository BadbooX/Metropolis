<?php 
    require_once "config.php";
    session_start();
    $requete = $bdd->prepare('SELECT * FROM films WHERE id_films');
    $requete->execute();
    if ($_SESSION['connecte'] == FALSE){
        header('location:index.php');
    }
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
    <title>MétropoliX - Accueil</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-dark fixed-top" > 
        <a class="logogonav" href="index.php"><img src="../img/logo_m.png" alt=""></a>
        <ul class="navbar-nav mr-auto">
            <li  id="disconnect" class="nav-item"><a href="deconnex.php"><button type="button" class="btn btn-primary">Déconnexion</button></a></li>
            
        </ul>

    </nav>
    
    <section id="slider" class="section_coverflow">
    
    <h2>Bonjour  <?php echo $_SESSION['user']; ?> !</h2>
    
    <h1>Les derniers <span class='coloredweb'>ajouts</span></h1>
        <input type="radio" name="slider" id="s1">
        <input type="radio" name="slider" id="s2">
        <input type="radio" name="slider" id="s3" checked>
        <input type="radio" name="slider" id="s4">
        <input type="radio" name="slider" id="s5">

    <label for="s1" id="slide1">
        <img  src="../img/film_theflowersofwar.png" alt="" >
    </label>
    <label for="s2" id="slide2">
        <img  src="../img/film_looneytune.png" alt="" >
    </label>
    <label for="s3" id="slide3">
        <img  src="../img/film_narnia.png" alt="" >
    </label>
    <label for="s4" id="slide4">
        <img  src="../img/film_malena.png" alt="" >
    </label>
    <label for="s5" id="slide5">
        <img  src="../img/film_parrain.png" alt="" >
    </label>
        
    </section>

    <section class="section_film">
        <div class="container_film">
            <h1>Nos <span class="coloredweb">films</span></h1>
            
            
            <div class="caroun">
            <h2 class="sumumh2">Tout les films :</h2>
               

                
                    
                    <div class='caroussel-container'>
                        <div class='caroussel-inner'>
                            <div class='track'>
                                
                                <?php
                                while($row=$requete->fetch())
                                
                                {
                                ?>
                                    <div class='card-container'>
                                        <div class='card'>
                                            <a href="filmauto.php?id_films=<?php echo $row['id_films'];?>">
                                            <img src="../img_caroussel/<?php echo $row['affiche_caroussel'];?>">
                                            </a>
                                        </div>
                                    </div><?php
                                }
                                ?>
                                
                                
                            </div>
                        </div>
                        <div class='nev'>
                            <button class='prev'><i class='fa-solid fa-circle-left'></i></button>
                            <button class='next'><i class='fa-solid fa-circle-right'></i></button>

                        </div>
                    </div>

                   
                
            </div>
           
        </div>
        
    </section>
   
    <?php 
        include("footerconected.php");
    ?>
    

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/carousel.js"></script>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
</body>

</html>