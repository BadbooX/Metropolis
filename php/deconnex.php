<?php 
    session_start();
    session_destroy();

    require_once 'config.php';

    header("Location:index.php?disc_err=deconnecté")

?>
