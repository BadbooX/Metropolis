<?php
    // Connexion à la bdd
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=metropolis;charset=utf8', 'root', '');
    }catch(PDOException $e)
    {
        print "ERREUR ! :" .$e->getMessage() . "<br/>";
        die;
    }

?>