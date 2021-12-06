<?php 
   session_start();

    // remove all session variables
    session_unset();

    if(session_destroy()) {
        header("Location: ../index.php");
    exit;
     }
