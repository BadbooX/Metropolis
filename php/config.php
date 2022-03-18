<?php
    // Connexion à la bdd
    try
    {
        $bdd = new PDO('mysql:host=db5006773119.hosting-data.io;dbname=dbs5603737;charset=utf8', 'dbu723784', 'YqxX4v36');
    }catch(PDOException $e)
    {
        print "ERREUR ! :" .$e->getMessage() . "<br/>";
        die;
    }

?>