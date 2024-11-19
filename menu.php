<?php
include('session_checker.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Menu</title>
    
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    

   <!-- <style>
    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    body{
        font-family: montserrat;
    }
    nav{
       
        height: 80px;
        width: 100%;
    }
    label.logo{
        color: #fff;
        font-size: 35px;
        line-height: 80px;
        padding: 0 100px;
        font-weight: bold;
    }
    nav ul{
        float: right;
        margin-right: 50px;
        z-index:999;

    }
    nav ul li{
        display: inline-block;
        line-height: 80px;
        margin: 0 5px;
    }
    nav ul li a{
        color: #fff;
        font-size: 17px;
        padding: 7px 13px;
        border-radius: 3px;
        text-transform: uppercase;
    }
    
    a.active,a:hover{
        background: #DAD4B5;
        opacity: .80;
        transition: .5s;
        color: #000;
    }
    .checkbtn{
        font-size: 30px;
        color: #DAD4B5;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;

    }
    #check{
        display: none;
    }

    .footer{
        background-color: #800000;
        padding: 70px 0;
        line-height: 1.5;
    }
    .footer-col{
        width: 25%;
        padding: 0 15px;

    }
    .footer-col h4{
       font-size: 18px;
       color: #fff;
       text-transform: capitalize;
       margin-bottom: 35px;
       font-weight: 500;
       position: relative;
    }
    .footer-col h4::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }
    .footer-col ul li:not(:last-child){
        margin-bottom: 10px;
    }
    .footer-col ul li a{
        font-size: 16px;
        text-transform: capitalize;
        color: #fff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
    }
    .footer-col ul li a:hover{
        color: #fff;
        padding-left:8px;
    }
    .footer-col .social-link a{
      display: inline-block;
      height: 40px;
      width: 40px;
      background-color: rgba(255, 255, 255, 0.2);
    }
    @media (max-width:1010px){
        .footer{
            display: block;
        }
        .footer-col{
            color: white;
        }
    }
    @media (max-width:952px){
        label.logo{
            font-size: 30px;
            padding-left: 50px;
        }
        nav ul li a{
            font-size: 16px;
        }
    }
    @media (max-width:1010px){
        .checkbtn{
            display:block ;
        }
        ul{
           
            width: 100%;
            height: 100vh;
            background:#800000;
            top: 80px;
            left: -100%;
            transition: all .5s;
            
        }
        nav ul li{
            width: 100%;
            display: block;
            margin: 50px 0;
            line-height: normal;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        nav ul li a{
            font-size: 20px;
        }
        a:hover, a.active{
            background: none;
            color: #000;
        }
        #check:checked ~ ul{
            left: 0;
        }
        .addtocartText{
            display: block;
        }
        
    }
   </style> -->
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
            <li><a href="index.php">Home</a></li>
            <li ><a href="about.php">About Us</a></li>
            <li><span class="addtocartText"></span><a href="cartpage.php"><i class="fa-solid fa-cart-shopping cart-icon"></i></a></li>
            <li><span class="accountSetting"></span><a href="accountsetting.php"><i class="fa-solid fa-gear"></i></a></li>
           
    </nav>
    <!--End of navbar--> 
    <div class="wrapper">
            <!--Search Bar and Categories Dropdpwn-->
            <div class="search-bar">
            <div class="box">
                <input type="text" placeholder="Search...">
                <a href="">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            </div>  
            <!--Categories-->
    
        <center>
            <div class="dropdown">
            <button>Categories of  the Products</button> 
                <div class="dropdown-content">
                    <a href="#">Local Spirits</a>
                    <a href="#">Infused and Specialty Liquors</a>
                    <a href="#">Local Cocktail Spirits</a>
                    <a href="#">Local Craft Spirits</a>
                    <a href="#">Seasonal Gift Sets</a>
                    <a href="#">Regional Flavors </a>
                    <a href="#">All Products</a>
                    
                </div>
            </div>
        </center>
      <!--product menu-->
        <div class="card-container">
            <div class="card">
                <img src="images/agedlambanog.jpg">
                <div class="card-content">
                    <h3>Aged Lambanog</h3>
                    <h4>Price:PHP 550 (500ml)</h4>
                    <p>Description: Timplang Aged Lambanog is a premium version of the traditional coconut spirit, aged in oak barrels to develop a richer, smoother flavor with hints of vanilla and caramel. Perfect for sipping or as a special gift.
                    </p>
                    <a href="" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                </div>
            </div>
    
            <div class="card">
                <img src="images/cashewwine.jpg">
                <div class="card-content">
                    <h3> Cashew Wine</h3>
                    <h4>Price: PHP 450 (500ml) </h4>
                    <p>Timplang Cashew Wine is a unique Filipino wine crafted from the cashew fruit, a tropical delicacy that thrives in the Bicol region. This wine is made by fermenting ripe cashew fruits, which are carefully harvested to capture their natural flavors. </p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                </div>
            </div>
            <div class="card">
                <img src="images/bugnaywine.jpg">
                <div class="card-content">
                    <h3> Bugnay Wine</h3>
                    <h4>Price: PHP 550 (500ml)</h4>
                    <p>Timplang Bugnay Wine is a traditional Filipino wine made from the wild Bugnay berries found in the mountainous regions of the Philippines. Known for its natural sweetness and vibrant color, Bugnay wine has been a part of Filipino culture for generations. </p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                </div>
            </div>
       
       
            <div class="card">
                <img src="images/mangowine.jpg">
                <div class="card-content">
                    <h3>Mango Wine</h3>
                   <h4>Price: PHP 400 (500ml) </h4>
                   <p>Description: Made from ripe mangoes sourced from the Bicol region, Timplang Mango Wine is a sweet, fruity wine with the unmistakable flavor of tropical mangoes, perfect for any occasion.</p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                </div>
            </div>
       
            <div class="card">
                <img src="images/basisangria.jpg">
                <div class="card-content">
                    <h3>Basi Sangria</h3>
                   <h4>Price: PHP 450 (500ml)</h4>
                   <p>  A bottled cocktail made with Timplang Basi, mixed with tropical fruits for a refreshing and flavorful twist on the classic sangria.</p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                    
                </div>
            </div>
            <div class="card">
                <img src="images/tapuy.jpg">
                <div class="card-content">
                    <h3>Tapuy</h3>
                    <h4>Price: PHP 550 (500ml)</h4>
                    <p> Timplang Tapuy is a rice wine that uses ancient brewing methods from the Cordillera region. It offers a smooth, slightly sweet flavor that’s perfect for both casual and ceremonial occasions.
                    </p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                    
                </div>
            </div>
            <div class="card">
                <img src="images/spicedrum.jpg">
                <div class="card-content">
                    <h3>Spiced Rum</h3>
                    <h4>Price: PHP 600 (500ml) </h4>
                    <p>Timplang Spiced Rum is a sugarcane-based rum infused with local spices, creating a smooth and aromatic rum perfect for sipping or mixing in your favorite cocktails.
                    </p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                    
                </div>
            </div>
            <div class="card">
                <img src="images/mojitolamnanog.jpg">
                <div class="card-content">
                    <h3>Mojito Lambanog</h3>
                    <h4>Price: PHP 600 (500ml)</h4>
                    <p> A ready-to-drink mojito made with Timplang Lambanog. This bottled cocktail is perfect for quick enjoyment—just chill, pour, and sip!
                    </p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                    
                </div>
            </div>
            <div class="card">
                <img src="images/sugarcanegold.jpg">
                <div class="card-content">
                    <h3>Timplang lambanog</h3>
                    <h4>Price: PHP 600 (500ml)</h4>
                    <p> Handcrafted from locally grown sugarcane, Timplang Sugarcane Gold is a rum distilled and aged to perfection, offering a clean and smooth experience that highlights the natural sugarcane flavor.
                    </p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn" >Add to cart</a>
                    
                </div>
            </div>
            <div class="card">
                <img src="images/lambanoghome.jpeg">
                <div class="card-content">
                    <h3>Timplang Lambanog</h3>
                    <h4>Price: PHP 600 (500ml)</h4>
                    <p>  Distilled from the finest, freshly harvested coconuts in the Tagalog region, Timplang Lambanog is a traditional Filipino spirit with a clean, smooth flavor that can be enjoyed straight or as the base for cocktails.
                    </p>
                    <a href="#" class="card-btn">Buy Now</a>
                    <a href="cartpage.php" class="cart-btn">Add to cart</a>
                    
                </div>
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