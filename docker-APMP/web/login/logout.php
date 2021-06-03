<?php
    session_start();
    session_destroy();
    header("Location: login.php");  //Redirection to login page
?>