<?php
    require_once "config.php";
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        
        $identifiant = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['password']);
        $mdp_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT identifiant, email, mdp FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check ->rowCount();

        if($row == 0){
            if(strlen($identifiant) <= 100){
                if(strlen($email)){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($mdp == $mdp_retype){
                            $mdp_hashed = password_hash($mdp, PASSWORD_DEFAULT);

                            $insert = $bdd->prepare('INSERT INTO users(identifiant, email, mdp)VALUES(:identifiant,:email,:mdp)');
                            $insert->execute(array(
                                'identifiant' => $identifiant,
                                'email' => $email,
                                'mdp' => $mdp_hashed
                            ));
                            header('Location:inscription.php?reg_err=success');

                        }else header('Location:inscription.php?reg_err=password');
                    }else header('Location:inscription.php?reg_err=email');
                }else header('Location:inscription.php?reg_err=email_length');
            }else header('Location:inscription.php?reg_err=identifiant_length');
        }else header ('Location:inscription.php?reg_err=already');
    }
    ?>