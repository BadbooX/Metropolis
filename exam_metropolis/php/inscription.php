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
    <title>Cinémet.fr - Inscription</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-dark fixed-top" >
        <a class="logogonav" href="index.php"><img src="../img/logo_m.png" alt=""></a>
    </nav>
    <section class="section_formConnex">
        <div class="containerConnex">
        <?php 
            if(isset($_GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

                switch($err){
                    case 'success':
                        ?>
                        <div class="alert alert-success">
                            <strong>Succès :</strong> Inscription réussie !
                        </div>
                        <?php
                    break;
                    
                    case 'password':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : </strong> Mot de passe différent.
                        </div>
                        <?php
                    break;

                    case 'email':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : </strong> Email non valide.
                        </div>
                        <?php
                    break;

                    case 'email_length':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : </strong> Email trop long.
                        </div>
                        <?php
                    break;

                    case 'identifiant_length':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : </strong> Identifiant trop long.
                        </div>
                        <?php
                    break;
                    case'already':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : </strong> Compte déjà existant.
                        </div>
                        <?php
                }
            }
        ?>
            <h1 class="titleConnex">S'inscrire :</h1>
            <form class="formConnex" method="post" action="inscription_traitement.php">
                <input class="inputs" name="username" autocomplete="off" placeholder="Entrez un identifiant." type="text" required>
                <input class="inputs" name="email" autocomplete="off"  placeholder="Entrez une adresse mail." type="email" required>
                <input class="inputs" type="password" placeholder="Entrez un mot de passe." name="password" required>
                <input class="inputs" type="password" placeholder="Confirmez le mot de passe" name="password_retype" required>
                <button  class="buttonForm" type="submit">Inscription</button>
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
