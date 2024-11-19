<?php 
  include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    
    <link rel="stylesheet" href="./css/index.css">
   
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
       
       <label class="logo">
         <img src="images/tpl.co.jpg" height="60" style="margin-left: 50px; margin-top: 10px;" >
       </label>
        <ul>
            <li>|   Welcome, <span style="text-transform: capitalize;"> <?php echo $currentUser ?> </span></li>
            <li><a href="menu.php">Menu</a></li>
            <li ><a href="about.php">About Us</a></li>
            <?php
              if(!$isUserLoggedIn) {
                echo "<li ><a href='login.php'>Login</a></li>";
              }else{
                echo "<li><form action='logout.php' method='post'><button class='logoutBtn' type='submit' name='logout-btn'>LOG OUT</button></form></li>";
              }
            ?>
            <li><span class="addtocartText"></span><a href="cartpage.php"><i class="fa-solid fa-cart-shopping cart-icon"></i></a></li>
            <?php 
             if($isUserLoggedIn){
                echo "<li><span class='accountSetting'></span><a href='accountsetting.php'><i class='fa-solid fa-gear'></i></a></li>";
             }
            ?>
           
        </ul>
    </nav>
    <!--End of navbar--> 

<div class="wrapper">
    <!--Banner-->
    <div id="Hero-banner">
      <p>Celebrate Paskong Pinoy with TLPD! Enjoy Exclusive Christmas Discounts, Holiday Bundles, and Special Deals on Traditional Filipino Drinks</p>
    </div>
    
    <div class="banner-container"> 
        
        <div class="banner-text">
             <h4>Celebrating Filipino Heritage Through Authentic Spirits</h4>
            <a href="menu.php" class="bannerbtn">Shop Now</a>
        </div>
    </div>

    <!--Card-->
    <div class="features">
       <h3>A Few of Our  Favorite Brands
    </h3>
    </div>
    <div class="card-container">
        <div class="card">
            <img src="images/agedlambanog.jpg">
            <div class="card-content">
                <h3>Lambanog</h3>
                <h4>Price: 500</h4>
                <p> Distilled from the finest, freshly harvested coconuts in the Tagalog region, Timplang Lambanog is a traditional Filipino spirit with a clean, smooth flavor that can be enjoyed straight or as the base for cocktails.</p>
                
                <form action="add_to_cart.php" method="post" >
                    <button type="submit" name="add-to-cart-btn">Add To Cart</button>
                </form>

                <!-- <a href="cartpage.php" class="card-btn">Buy Now</a>
                <a href="cartpage.php" class="cart-btn">Add to cart</a> -->

            </div>
        </div>
   
        <div class="card">
            <img src="images/bugnaywine.jpg">
            <div class="card-content">
                <h3> Bugnay Wine</h3>
                <h4>Price: 500</h4>
                <p> The wild mulberries are handpicked, fermented, and carefully crafted to create a wine that is both refreshing and unique. This wine pairs wonderfully with Filipino dishes, cheese, or can be enjoyed on its own as a special treat.</p>
                
                <form action="add_to_cart.php" method="post" >
                    <button type="submit" name="add-to-cart-btn">Add To Cart</button>
                </form>

                <!-- <a href="cartpage.php" class="card-btn">Buy Now</a>
                <a href="cartpage.php" class="cart-btn">Add to cart</a> -->

            </div>
        </div>

        <div class="card">
            <img src="images/basisangria.jpg">
            <div class="card-content">
                <h3>Basi Sangria</h3>
                <h4>Price: 500</h4>
                <p>  A bottled cocktail made with Timplang Basi, mixed with tropical fruits for a refreshing and flavorful twist on the classic sangria.
                </p>
                
               <form action="add_to_cart.php" method="post" >
                    <button type="submit"  name="add-to-cart-btn">Add To Cart</button>
                </form>

                <!--  <a href="cartpage.php" class="card-btn">Buy Now</a>
                <a href="cartpage.php" class="cart-btn">Add to cart</a>
                 -->
            </div>
        </div>
    </div>

    <!--  FAQ -->
      <div class="FAQ-Wrapper">
        <h1>Frequently Asked Questions</h1>
        <div class="faq">
            <button class="accordion">
                Why Trust Us? <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="panel">
                <p class="1">At Timplang Pinoy Liquor Company, we are deeply committed to promoting Filipino culture and heritage through our carefully crafted traditional alcoholic beverages. We prioritize authenticity, quality, and sustainability in every bottle, made with love and respect for our nation's rich history.
                </p>
            </div>
        </div>
        <div class="faq">
            <button class="accordion">
            Services We Offer <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="panel">
                <p>We offer a wide range of traditional Filipino alcoholic drinks, each carefully crafted using time-honored methods passed down through generations. From lambanog, tapuy and basi to  other regional favorites, our selection celebrates the diversity and richness of Filipino spirits. With a focus on sustainable farming and ethical sourcing, we collaborate directly with small-scale farmers and distilleries to ensure that every drink is as fresh and authentic as possible.

                Additionally, we offer personalized services for wholesale orders, customized branding, and bulk deliveries, ensuring that you have access to the best of Filipino-made spirits for your business, event, or special occasion.

                </p>
            </div>
        </div>
        <div class="faq">
        <button class="accordion" aria-expanded="false" aria-controls="panel1">
            What We Offer <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div id="panel1" class="panel" role="region">
            <p>
                (1) Authentic Filipino Spirits: Traditional, handcrafted alcoholic beverages made from locally sourced ingredients. <br><br>
                (2) Sustainable Sourcing: Partnerships with local farmers to ensure ethical practices and fair trade. <br><br>
                (3) Retail and Wholesale: A variety of purchasing options for individual customers and businesses. <br><br>
                (4) Customized Bottles and Branding: Tailored for businesses or personal events looking for a unique Filipino drink experience. <br><br>
                Nationwide Delivery: Fast, reliable shipping to bring our products to customers nationwide.
            </p>
        </div>
    </div>
        <div class="faq">
        <button class="accordion" aria-expanded="false" aria-controls="panel2">
            Reviews <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div id="panel2" class="panel" role="region">
            <p>
                Here’s what our customers have to say: <br><br>
                “I’ve never tasted lambanog this fresh! Timplang Pinoy Liquor Company brings the authentic flavors of the Philippines to the world. I highly recommend their products!” – Juan D., Manila<br><br>
                “As a restaurant owner, it’s been amazing to have a supplier who understands the importance of local flavors. Our customers love the variety and quality of their traditional Filipino drinks!” – Maria L., Cebu<br><br>
                “I ordered a batch of basi sangria for a family celebration, and it was a hit! The process was seamless, and the quality exceeded my expectations. Will definitely be ordering again!” – Liza T., Davao<br><br>
                “The authenticity of their drinks speaks volumes about their commitment to Filipino culture. I trust Timplang Pinoy for all my catering events.” – Erik G., Quezon City
            </p>
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
    </div>
    <script>
var acc = document.getElementsByClassName("accordion");

for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        // Toggle the clicked accordion
        var panel = this.nextElementSibling;
        var isOpen = panel.style.display === "block"; // Check if it's already open

        // Close all panels
        var allPanels = document.querySelectorAll(".panel");
        var allAccordions = document.querySelectorAll(".accordion");

        allAccordions.forEach(function (accordion) {
            accordion.classList.remove("active");
            accordion.parentElement.classList.remove("active");
            accordion.setAttribute("aria-expanded", "false");
        });

        allPanels.forEach(function (p) {
            p.style.display = "none";
        });

        // If the clicked panel was not open, open it
        if (!isOpen) {
            this.classList.add("active");
            this.parentElement.classList.add("active");
            this.setAttribute("aria-expanded", "true");
            panel.style.display = "block";
        }
    });
}
</script>



   
</body>
</html>