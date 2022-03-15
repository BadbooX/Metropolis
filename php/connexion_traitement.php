<?php 
    session_start();
    require_once 'config.php';
    
    
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])){

        $identifiant = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['password']);
        


       
       

        $check = $bdd->prepare('SELECT identifiant, email, mdp FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check ->rowCount();
        
        $mdp_hashed = password_hash($mdp, PASSWORD_DEFAULT);
        
        function belongs_to_password() {
            $args = func_get_args();
            $str  = array_shift($args);
            foreach ($args as $hash) {
              if (!password_verify($str, $hash)) return false;
            }
            return true;
          }
        
        if($row == 1){

            if($data['identifiant'] == $identifiant){ 

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    
                   
                    if(belongs_to_password($mdp, $mdp_hashed, $data['mdp'])){

                        $_SESSION['user'] = $data['identifiant'];
                        header('Location:accueil.php');
                    
                    }else header('Location:connexion.php?login_err=password');
                }else header('Location:connexion.php?login_err=email');
            }else header('Location:connexion.php?login_err=username_fail'); 
        }else header('Location:connexion.php?login_err=inexist');
    }else header('Location:connexion.php');  

?>