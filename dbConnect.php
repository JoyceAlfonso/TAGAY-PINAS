<?php
$conn = mysqli_connect("localhost", "root", "", "login_system");

if($conn){
}
else{
    echo 'you are unable to connect to the database';
}
?>