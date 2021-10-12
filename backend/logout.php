<<<<<<< HEAD
<?php 
    session_start();
    session_unset();
    session_cache_expire();
    session_destroy();
    if (!isset($_SESSION["auth"])) {
        header("location: ../home.php");
    }
=======
<?php 
    session_start();
    session_unset();
    session_cache_expire();
    session_destroy();
    if (!isset($_SESSION["auth"])) {
        header("location: ../home.php");
    }
>>>>>>> 5eec0f63818cddd420aba2420a65c58249618f7c
?>