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
    <title>Cinémaet.fr - Se connecter</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-dark fixed-top" >
        <a class="logogonav" href="index.php"><img src="../img/logo_m.png" alt=""></a>
    </nav>
    <section class="section_formConnex">
        <div class="containerConnex">
        <?php 
            if(isset($_GET['login_err']))
            {
                $err =  htmlspecialchars($_GET['login_err']);
                switch($err){
                    case 'password':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur :</strong> Mot de passe incorrect.
                        </div>
                    <?php
                    break;
                    case 'email':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur :</strong> Email incorrect.
                        </div>
                    <?php
                    break;
                    case 'inexist':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur :</strong> Compte inexistant.
                        </div>
                    <?php
                    break;
                    case 'username_fail':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : </strong> Indentifiant incorrect.
                        </div>
                    <?php
                    break;
                }
            }
        ?>
            <h1 class="titleConnex">Se connecter :</h1>
            <form class="formConnex" method="post" action="connexion_traitement.php">
                <input class="inputs" name="username" autocomplete="off" placeholder="Entrez un identifiant." type="text" required>
                <input class="inputs" name="email" autocomplete="off" placeholder="Entrez une adresse mail." type="email" required>
                <input class="inputs" type="password" placeholder="Entrez un mot de passe." name="password" required>
                <button class="buttonForm" type="submit">Connexion</button>
            </form>
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
