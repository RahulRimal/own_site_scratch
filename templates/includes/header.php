<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to OwnSite</title>

    <link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/custom.css">

    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/lightslider.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/bootstarp.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/ckeditor/ckeditor.js"></script>

</head>

<body>

    <!-- Topbar Starts Here -->

    <div id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-8 col-md-6" style="height: 40px; line-height:40px;">
                    <div class="topbar-content text-white">
                        <p><span><i class="fas fa-envelope"></i></span> contact@sabaekoBazar.com</p>
                    </div>
                </div>
                <div class="col-4 col-md-6" style="height: 40px; line-height:40px;">
                    <div class="topbar-social">
                        <ul class="topbar-social-icons d-flex justify-content-end">
                            <a class="mx-1" href="#">
                                <li><i class="fab fa-twitter" aria-hidden="true"></i></li>
                            </a>
                            <a class="mx-1" href="#">
                                <li><i class="fab fa-facebook" aria-hidden="true"></i></li>
                            </a>
                            <a class="mx-1" href="#">
                                <li><i class="fab fa-instagram" aria-hidden="true"></i></li>
                            </a>
                            <a class="mx-1" href="#">
                                <li><i class="fab fa-pinterest" aria-hidden="true"></i></li>
                            </a>
                            <a class="mx-1" href="#">
                                <li><i class="fab fa-youtube" aria-hidden="true"></i></li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Topbar Ends Here -->

    <!-- Header Starts Here -->
    <header id="header">
        <div class="header-content">
            <div class="main-header">
                <div class="row mx-1 d-flex justify-content-between">
                    <div class="col-12 col-md-2" style="align-self: center;">
                        <div class="header-logo-section py-1">
                            <img src="<?php echo BASE_URI; ?>images/logoalternate.png" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 d-flex justify-content-start" style="align-self: center;">
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
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-start" style="align-self: center;">
                        <div class="header-breadcrumbs-sectios my-5 my-md-0 w-100">
                            <div class="row">
                                <div class="col-5 col-md-5" style="align-self: center; border-right: 2px solid white;">
                                    <div class="header-wishlist">
                                        <p>My Favourite</p>
                                        <a href="">
                                            <h5 class="d-flex justify-content-center">Wishlist<i aria-hidden="true" class="far fa-heart" style="margin: 3px 0 0 3px;"></i>
                                            </h5>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-5 col-md-5" style="align-self: center; border-right: 2px solid white;">
                                    <div class="header-account">
                                        <p>Login/SignUp</p>
                                        <a href="">
                                            <h5 class="d-flex justify-content-center">My Account <i aria-hidden="true" class="fas fa-lock" style="margin-left:3px"></i></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-2 col-md-2" style="align-self: center;">
                                    <div class="header-cart">
                                        <a href=""><i class="fas fa-shopping-cart"></i>
                                            <h6 class="cart-item-count">0</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main nav starts here -->
    <div class="main-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="<?php echo BASE_URI; ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="<?php echo BASE_URI; ?>blog.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="<?php echo BASE_URI; ?>store.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="<?php echo BASE_URI; ?>cart.php">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="<?php echo BASE_URI; ?>checkout.php">Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="<?php echo BASE_URI; ?>profile.php">My Account</a>
                        </li>
                    </ul>
                    <div class="nav-breadcrumbs text-center">
                        <div class="nav-breadcrumbs-call-icon">
                            <i class="fas fa-phone-alt icon"></i>
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
            </div>
        </nav>

        <!-- Main nav starts here -->
    </div>
    <!-- Header Ends Here -->