<?php
include('session_checker.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="css/cartpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
     <!--start of nav bar-->
     <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
         </label>
        
       <label class="logo"><img src="images/tpl.co.jpg" height="50" style="margin-left: 50px; margin-top: 10px;"></label>
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="menu.php">Contact Us</a></li>
            <li> 
                <?php  
                    if(isset($_SESSION["user_name"])) {
                        echo "<form action='logout.php' method='post'><button class='logoutBtn' type='submit' name='logout-btn'>LOG OUT</button></form>";
                    }
                ?>
            </li>
     </ul>
        </nav>
    <!--End of navbar--> 
  
  <div class="wrapper">
  <!--Cart Items Details Sample-->
  <div class="small-container cart-page">
    <table id="cartTable">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr class="cart-row">
            <td>
               <div class="cart-info">
                 <img src="images/tapuy.jpg" alt="tapuy liquor" height="150">
                    <div>
                    <p>Tapuy Liquor</p>
                    <small class="price">Price: P700.00</small>
                    <br>
                    <a href="#" class="remove">Remove</a>
                    </div>
               </div>
             </td>
            <td><input type="number" value="1" class="quantity"></td>
            <td  class="subtotal">P700.00</td>
        </tr>
        <tr>
            <td>
               <div class="cart-info">
                 <img src="images/sugarcanegold.jpg" alt="sugarcane gold" height="150">
                    <div>
                    <p>sugarcane gold</p>
                    <small class="price">Price: P700.00</small>
                    <br>
                    <a href="#" class="remove">Remove</a>
                    </div>
               </div>
             </td>
            <td><input type="number" value="1"></td>
            <td>P700.00</td>
        </tr>
        <tr>
            <td>
               <div class="cart-info">
                 <img src="images/mojitolamnanog.jpg" alt="mojito lamnanog liquor" height="150">
                    <div>
                    <p>mojito lamnanogr</p>
                    <small class="price">Price: P820.00</small>
                    <br>
                    <a href="#" class="remove">Remove</a>
                    </div>
               </div>
             </td>
            <td><input type="number" value="1"></td>
            <td>P820.00</td>
        </tr>
    </table>

    <div class="totalPrice">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>4200</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>4200</td>
            </tr>
        </table>
    </div>
  </div>
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