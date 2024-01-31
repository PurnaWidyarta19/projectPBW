<?php
    session_start();
    if ($_SESSION['email']){
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    }
?>