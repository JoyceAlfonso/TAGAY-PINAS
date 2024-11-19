<?php 
    session_start();

    $currentUser = "Guess";
    $isUserLoggedIn = false;
    if(isset($_SESSION["user_name"])) {
        $currentUser = $_SESSION["user_name"];
        $isUserLoggedIn = true;
    }else {
      $isUserLoggedIn = false;
    }
?>