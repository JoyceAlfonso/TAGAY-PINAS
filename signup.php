<?php
include('dbConnect.php'); //connection of PHP to Database

$notif = '';

if(isset($_POST['btnRegister'])){
 //Check if all the elements have been filled up
 if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['confirm_password'])){
  //Check for the special character
  if(!preg_match('/[\'^$&{}<>;=!]/',$_POST['username'])){
   $inputUsername = $_POST['username'];
   $inputEmail = $_POST['email'];
   $inputPassword = $_POST['password'];
 
   //CHECK IF THE USERNAME EXIST IN THE DATABASE
   $checkUsername = mysqli_query($conn, "SELECT user_name FROM users WHERE user_name = '$inputUsername'");
   $numberOfUser = mysqli_num_rows($checkUsername);
   if($numberOfUser < 1){
    if(strlen($inputPassword) < 8 || strlen($inputPassword) > 24){
      $notif = 'Password must be 8 to 24 characters';
     } else {
      if($inputPassword == $inputConfirmPassword){
        $insertQuery = mysqli_query($conn, "INSERT INTO users (user_name,user_email,user_password) VALUES ('$inputUsername','$inputEmail',md5('$inputPassword'))");
        if($insertQuery) {
          $notif = "Signed up successfully!";
        }else {
          $notif = "Something went wrong!";
        }
      }else {
        $notif = "Password is not match!";
      }
     }
   }
   else{
    $notif = 'Username already exist. Please try AGAIN';
   }
   
  }
  else {
    $notif = 'No special character for username is allowed. Please try again';
  }
 
   //$notif = 'All elements have been filled up';
 } else{
    $notif = "All fields are required. Please try again";
  
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
</head>
<body>
  <!--NAVBAR-->
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
     </label>
   <label class="logo"><img src="images/tpl.co.jpg" height="50" style="margin-left: 50px; margin-top: 10px;" ></label>
    <ul>      
            <li><a href="index.php">Home</a></li> 
            <li><a href="about.php">About Us</a></li>
            
    </ul>
</nav>
 <!-- END NAVBAR-->

  <div class="wrapper">
    <h1>Sign Up</h1>
    <i><?php echo $notif ?></i>
    <form action="#" method="POST">
      <input type="text" name="username" placeholder="Username" >
      <input type="email" name="email" placeholder="Email" >
      <input type="password" name="password" placeholder="Password" >
      <input type="password" name="confirm_password" placeholder="Confirm Password" >
      
      <div class="terms">
        <input type="checkbox" name="terms-checkbox" id="checkbox" >
        <label for="checkbox">I agree to these <a href="#">Terms & Condition</a></label>
      </div>

      <button type="submit" name="btnRegister">Sign Up</button>
    </form>
    <div class="member"> Already a member? <a href="login.php">Login Here</a></div>
  </div>
       <!--FOOTER-->
  <footer class="footer">
    <div class="container">
        <div class="row">
           <div class="footer-col">
            <h4>company</h4>
            <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products/Menu</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
           </div>
           <div class="footer-col">
            <h4>get help</h4>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#"></a></li>
            </ul>
           </div>
           <div class="footer-col">
            <h4>online shop</h4>
            <ul>
                <li><a href="#">sbjdbsjbc</a></li>
                <li><a href="#">vskns</a></li>
                <li><a href="#">vsvs</a></li>
                <li><a href="#">vsvsv</a></li>
            </ul>
           </div>
           <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"></a>
            </div>
           </div>
           
        </div>
    </div>
</footer>
</body>
</html>