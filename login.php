<?php
include('dbConnect.php'); // connection to the database
session_start(); // start a session to track logged-in users

$notif = ''; // notification message

if (isset($_POST['btnLogin'])) {
    // Collect form data
    $inputEmail = mysqli_real_escape_string($conn, $_POST['email']);
    $inputPassword = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Check if both email and password are filled
    if (!empty($inputEmail) && !empty($inputPassword)) {
        // Query to check if the user exists with the provided email
        $query = "SELECT * FROM users WHERE user_email = '$inputEmail' AND user_password = MD5('$inputPassword')";
        $result = mysqli_query($conn, $query);
        
        // Check if the user exists
        if (mysqli_num_rows($result) > 0) {
            // Start a session for the user
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['user_email'] = $user['user_email'];
            
            // Redirect to the dashboard or home page
            header('Location: index.php');
            exit();
        } else {
            // Display error message if login fails
            $notif = 'Invalid email or password. Please try again.';
        }
    } else {
        // Display error message if fields are empty
        $notif = 'Both fields are required. Please fill in your email and password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <style>
    
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
     </label>
    
   <label class="logo"><img src="images/tpl.co.jpg" height="50" style="margin-left: 50px; margin-top: 10px;"></label>
    <ul>
            <li ><a href="about2.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><span class="addtocartText"></span><a href="cartpage.html"><i class="fa-solid fa-cart-shopping cart-icon"></i></a></li>
     
        <li>|   Welcome Guess </li>
    </ul>
  </nav>

  <!-- Login Form -->
  <div class="wrapper">
    <h1>Login</h1>
    <!-- Display notification message (if any) -->
    <i><?php echo $notif; ?></i>
    <form action="" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <div class="recover">
        <a href="#">Forgot Password?</a>
      </div>
      <button type="submit" name="btnLogin">Login</button>
    </form>
    
    <div class="member"> Don't have an account? <a href="signup.php">Register Now</a></div>
  </div>

  <!-- Footer -->
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
            </ul>
           </div>
           <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
           </div>
        </div>
    </div>
  </footer>
</body>
</html>
