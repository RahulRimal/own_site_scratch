<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to OwnSite</title>

  <link rel="stylesheet" href="<?php echo BASE_URI;?>templates/css/custom.css">

  <link type="text/css" rel="stylesheet" href="<?php echo BASE_URI;?>templates/css/lightslider.css" />                  
  
  <script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>

  

</head>
<body>

    <!-- Topbar Starts Here -->
  
    <div id="topbar">
        <div class="topbar-contents">
            <div class="topbar-content">
                <p>Welcome to OwnSite</p>
            </div>
            <div class="topbar-social">
                <ul class="topbar-social-icons">
                    <a href="#"><li><i class="fab fa-twitter" aria-hidden="true"></i></li></a>
                    <a href="#"><li><i class="fab fa-facebook" aria-hidden="true"></i></li></a>
                    <a href="#"><li><i class="fab fa-instagram" aria-hidden="true"></i></li></a>
                    <a href="#"><li><i class="fab fa-pinterest" aria-hidden="true"></i></li></a>
                    <a href="#"><li><i class="fab fa-youtube" aria-hidden="true"></i></li></a>
                </ul>
            </div>
        </div>
    </div>

    <!-- Topbar Ends Here -->

    <!-- Header Starts Here -->
    <header id="header">
        <div class="header-content">
            <div class="main-header">
                <div class="header-logo-section">
                    <img src="<?php echo BASE_URI;?>images/logoalternate.png" alt="">
                </div>
                <div class="header-search-section">
                   <form action="#">
                    <select name="selectProducts" id="selectProductsFromCategories">
                        <option value="#">Fashion</option>
                        <option value="#">Tech</option>
                        <option value="#">Phones</option>
                        <option value="#">Male</option>
                        <option value="#">Female</option>
                    </select>
                    <input type="text" name="headerSearchProducts" placeholder="Search Products..">
                    <button name="headerSearchProductsSubmit">Search</button>
                   </form>
                </div>
                <div class="header-breadcrumbs-sectios">
                    <div class="header-wishlist">
                        <p>My Favourite</p>
                        <a href="">
                            <h5>Wishlist <i aria-hidden="true" class="far fa-heart"></i>
                            </h5>
                        </a>
                    </div>

                    <div class="header-account">
                        <p>Login/SignUp</p>
                        <a href=""><h5>My Account <i aria-hidden="true" class="fas fa-lock"></i></h5></a>
                    </div>
                    <div class="header-cart">
                        <a href=""><i class="fas fa-shopping-cart"></i>
                            <h6 class="cart-item-count">0</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-nav">
        <div class="nav-content">
            <ul>
                <li></li><a href="<?php echo BASE_URI;?>">Home</a></li>
                <li></li><a href="<?php echo BASE_URI;?>blog.php">News</a></li>
                <li></li><a href="<?php echo BASE_URI;?>store.php">Shop</a></li>
                <li></li><a href="<?php echo BASE_URI;?>cart.php">Cart</a></li>
                <li></li><a href="<?php echo BASE_URI;?>checkout.php">Checkout</a></li>
                <li></li><a href="<?php echo BASE_URI;?>profile.php">My Account</a></li>
            </ul>
        </div>
        <div class="nav-breadcrumbs">
            <div class="nav-breadcrumbs-call-icon">
                <i class="fas fa-phone-alt"></i>
                <div class="nav-breadcrumbs-call-content">
                    <ul>
                        <li>Call To</li>
                        <li class="call-number">
                            <strong>977-9846375829</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Ends Here -->

    <!-- Main section starts here -->
<section id="main">
    <main>
        <!-- Main top section Starts Here -->
        <div class="main-top-content">