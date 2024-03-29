<?php include('includes/header.php'); ?>


<!-- Main section starts here -->
<section id="main">
    <main>
        <!-- Main-boxed-Content Starts Here -->
        <div class="main-boxed-content">
            <!-- <div class="container"> -->
                <div class="w-100">

                <div class="row w-100">
                    <div class="col-md-3">
                        <?php include('includes/left_sidebar.php'); ?>
                    </div>
                    <div class="col-md-6">
                        <div class="main-carousel">
                            <ul id="lightSlider">
                                <?php foreach ($carouselImages as $carouselImage) : ?>
                                    <li>
                                        <img src="<?php echo BASE_URI; ?>images/lightSlider/<?php echo $carouselImage->image; ?>" alt="">
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="new-collection-offer-banner">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Big offers on new collections</h3>
                                </div>
                                <div class="col-md-3" style="align-self: center;">
                                    <a href="#">Check</a>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Products Starts Here -->

                        <div class="trending-products-title product-section-title">
                            <h3>Trending Now</h3>
                        </div>

                        <div class="product-section">
                            <div class="trending-products-carousel product-carousel">
                                <!-- <ul id="productsLightSlider" class="cs-hidden"> -->
                                <ul class="productsLightSlider" class="cs-hidden">

                                    <!-- Product-box starts here  -->
                                    <?php foreach ($products as $product) : ?>
                                        <li class="item-a">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <a href="<?php BASE_URI; ?>product.php?product=<?php echo $product->id ?>"><img src="<?php echo BASE_URI; ?>images/products/<?php echo $product->image; ?>" alt=""></a>
                                                    <a href="#" class="product-quick-view">
                                                        <i class="icon-eye" aria-hidden="true"></i>
                                                        QUICK VIEW
                                                    </a>
                                                    <?php if ($product->wishlisted) : ?>
                                                        <a class="product-add-wishlist">
                                                            <i aria-hidden="true" class="fas fa-heart">Wishlisted</i>
                                                        </a>
                                                    <?php else : ?>
                                                        <a class="product-add-wishlist">
                                                            <i aria-hidden="true" class="far fa-heart">Add to Wishlist</i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($product->stock_count == 0) : ?>
                                                        <a href="#" class="product-out-stock">
                                                            OUT OF STOCK
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($product->on_sale) : ?>
                                                        <a href="#" class="product-sale">
                                                            SALE
                                                        </a>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="product-categories">
                                                    <a href="#">Jackets,</a>
                                                    <a href="#">Men</a>
                                                </div>
                                                <div class="product-name">
                                                    <a href="product.php?product=<?php echo $product->id ?>"><?php echo $product->name; ?></a>
                                                </div>
                                                <div class="product-price">
                                                    <?php if ($product->on_sale) : ?>
                                                        <span><?php echo $product->regular_price; ?></span> Rs.<?php echo $product->sale_price; ?>
                                                    <?php else : ?>
                                                        Rs.<?php echo $product->regular_price; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="product-rating">
                                                    <?php
                                                    if ($product->average_rating > 5) {
                                                        $rating = 5;
                                                    } else {
                                                        $rating = $product->average_rating;
                                                    }
                                                    for ($i = 0; $i < $rating; $i++) : ?>
                                                        <i class="fas fa-star rated"></i>
                                                    <?php endfor; ?>

                                                    <?php if ($i < 5) : ?>
                                                        <?php $j = 4 - $i;
                                                        for ($k = 0; $k <=  $j; $k++) : ?>
                                                            <i class="fas fa-star unrated"></i>
                                                        <?php endfor; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="product-add-cart-button">
                                                    <button>Add to cart</button>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- Product-box ends here  -->
                                </ul>



                            </div>




                        </div>

                        <!-- Trending Products Ends Here -->


                        <!-- New Products Starts Here -->

                        <div class="new-products-title product-section-title">
                            <h3>New Arraivals</h3>
                        </div>

                        <div class="product-section">
                            <div class="new-products-carousel product-carousel">
                                <!-- <ul id="productsLightSlider" class="cs-hidden"> -->
                                <ul class="productsLightSlider" class="cs-hidden">
                                    <!-- Product-box starts here  -->
                                    <?php foreach ($products as $product) : ?>
                                        <li class="item-a">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <a href="<?php BASE_URI; ?>product.php?product=<?php echo $product->id ?>"><img src="<?php echo BASE_URI; ?>images/products/<?php echo $product->image; ?>" alt=""></a>
                                                    <a href="#" class="product-quick-view">
                                                        <i class="icon-eye" aria-hidden="true"></i>
                                                        QUICK VIEW
                                                    </a>
                                                    <?php if ($product->wishlisted) : ?>
                                                        <a class="product-add-wishlist">
                                                            <i aria-hidden="true" class="fas fa-heart">Wishlisted</i>
                                                        </a>
                                                    <?php else : ?>
                                                        <a class="product-add-wishlist">
                                                            <i aria-hidden="true" class="far fa-heart">Add to Wishlist</i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($product->stock_count == 0) : ?>
                                                        <a href="#" class="product-out-stock">
                                                            OUT OF STOCK
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($product->on_sale) : ?>
                                                        <a href="#" class="product-sale">
                                                            SALE
                                                        </a>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="product-categories">
                                                    <a href="#">Jackets,</a>
                                                    <a href="#">Men</a>
                                                </div>
                                                <div class="product-name">
                                                    <a href="product.php?product=<?php echo $product->id ?>"><?php echo $product->name; ?></a>
                                                </div>
                                                <div class="product-price">
                                                    <?php if ($product->on_sale) : ?>
                                                        <span><?php echo $product->regular_price; ?></span> Rs.<?php echo $product->sale_price; ?>
                                                    <?php else : ?>
                                                        Rs.<?php echo $product->regular_price; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="product-rating">
                                                    <?php
                                                    if ($product->average_rating > 5) {
                                                        $rating = 5;
                                                    } else {
                                                        $rating = $product->average_rating;
                                                    }
                                                    for ($i = 0; $i < $rating; $i++) : ?>
                                                        <i class="fas fa-star rated"></i>
                                                    <?php endfor; ?>

                                                    <?php if ($i < 5) : ?>
                                                        <?php $j = 4 - $i;
                                                        for ($k = 0; $k <=  $j; $k++) : ?>
                                                            <i class="fas fa-star unrated"></i>
                                                        <?php endfor; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="product-add-cart-button">
                                                    <button>Add to cart</button>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- Product-box ends here  -->

                                </ul>

                            </div>

                        </div>

                        <!-- New Products Ends Here -->

                        <!-- 20% off banner-ad-section starts here-->

                        <div class="twenty-off-banner-ad">
                            <img src="<?php echo BASE_URI; ?>images/banners/2020-11-14 22_25_31-Glasses – See world from new prospective.png" alt="">
                        </div>
                        <!-- 20% off banner-ad-section ends here-->


                        <!-- Top Rated Products Starts Here -->

                        <div class="top-rated-products-title product-section-title">
                            <h3>Top Rated</h3>
                        </div>

                        <div class="product-section">
                            <div class="top-rated-products-carousel product-carousel">
                                <!-- <ul id="productsLightSlider" class="cs-hidden"> -->
                                <ul class="productsLightSlider" class="cs-hidden">
                                    <!-- Product-box starts here  -->
                                    <?php foreach ($products as $product) : ?>
                                        <li class="item-a">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <a href="<?php BASE_URI; ?>product.php?product=<?php echo $product->id ?>"><img src="<?php echo BASE_URI; ?>images/products/<?php echo $product->image; ?>" alt=""></a>
                                                    <a href="#" class="product-quick-view">
                                                        <i class="icon-eye" aria-hidden="true"></i>
                                                        QUICK VIEW
                                                    </a>
                                                    <?php if ($product->wishlisted) : ?>
                                                        <a class="product-add-wishlist">
                                                            <i aria-hidden="true" class="fas fa-heart">Wishlisted</i>
                                                        </a>
                                                    <?php else : ?>
                                                        <a class="product-add-wishlist">
                                                            <i aria-hidden="true" class="far fa-heart">Add to Wishlist</i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($product->stock_count == 0) : ?>
                                                        <a href="#" class="product-out-stock">
                                                            OUT OF STOCK
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($product->on_sale) : ?>
                                                        <a href="#" class="product-sale">
                                                            SALE
                                                        </a>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="product-categories">
                                                    <a href="#">Jackets,</a>
                                                    <a href="#">Men</a>
                                                </div>
                                                <div class="product-name">
                                                    <a href="product.php?product=<?php echo $product->id ?>"><?php echo $product->name; ?></a>
                                                </div>
                                                <div class="product-price">
                                                    <?php if ($product->on_sale) : ?>
                                                        <span><?php echo $product->regular_price; ?></span> Rs.<?php echo $product->sale_price; ?>
                                                    <?php else : ?>
                                                        Rs.<?php echo $product->regular_price; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="product-rating">
                                                    <?php
                                                    if ($product->average_rating > 5) {
                                                        $rating = 5;
                                                    } else {
                                                        $rating = $product->average_rating;
                                                    }
                                                    for ($i = 0; $i < $rating; $i++) : ?>
                                                        <i class="fas fa-star rated"></i>
                                                    <?php endfor; ?>

                                                    <?php if ($i < 5) : ?>
                                                        <?php $j = 4 - $i;
                                                        for ($k = 0; $k <=  $j; $k++) : ?>
                                                            <i class="fas fa-star unrated"></i>
                                                        <?php endfor; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="product-add-cart-button">
                                                    <button>Add to cart</button>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- Product-box ends here  -->

                                </ul>
                            </div>

                        </div>

                        <!-- Top Rated Products Ends Here -->
                    </div>

                    <div class="col-md-3">
                        <?php include('includes/right_sidebar.php'); ?>
                    </div>
                </div>
                                                        </div>
            <!-- </div> -->
            <!-- Main-boxed-Content Ends Here -->


            <!-- Main-wide-Content Starts Here -->
            <div class="main-wide-content">

            </div>

            <!-- Main-wide-Content Ends Here -->
    </main>
</section>
<?php include('includes/footer.php'); ?>