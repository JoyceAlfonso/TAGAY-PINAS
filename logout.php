<?php 
    session_start();
    if(isset($_POST['logout-btn'])) {
        session_destroy();
        header("Location: index.php");
    }
  
?>