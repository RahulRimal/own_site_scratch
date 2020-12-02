<?php include('includes/header.php');?>
<?php include('includes/left_sidebar.php');?>


<!-- Main-boxed-Content Starts Here -->
<div class="main-boxed-content">
                <div class="main-carousel">
                    <ul id="lightSlider">
                        <?php foreach($carouselImages as $carouselImage):?>
                        <li>
                            <img src="<?php echo BASE_URI;?>images/lightSlider/<?php echo $carouselImage->image;?>" alt="">
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <div class="new-collection-offer-banner">
                    <h3>Big offers on new collections</h3>
                    <a href="#">Check</a>
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
                        <?php foreach($products as $product):?>
                        <li class="item-a">        
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="<?php BASE_URI;?>product.php?product=<?php echo $product->id?>"><img src="<?php echo BASE_URI;?>images/products/<?php echo $product->image;?>" alt=""></a>
                                    <a href="#" class="product-quick-view">
                                        <i class="icon-eye" aria-hidden="true"></i>
                                        QUICK VIEW
                                    </a>
                                    <?php if($product->wishlisted):?>
                                        <a class="product-add-wishlist">
                                            <i aria-hidden="true" class="fas fa-heart">Wishlisted</i>
                                        </a>
                                    <?php else:?>
                                    <a class="product-add-wishlist">
                                        <i aria-hidden="true" class="far fa-heart">Add to Wishlist</i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($product->stock_count == 0):?>
                                        <a href="#" class="product-out-stock">
                                            OUT OF STOCK
                                        </a>
                                    <?php endif;?>
                                    <?php if($product->on_sale):?>
                                        <a href="#" class="product-sale">
                                            SALE
                                        </a>
                                    <?php endif;?>
                                    
                                </div>
                                <div class="product-tags">
                                    <a href="#">Jackets,</a>
                                    <a href="#">Men</a>
                                </div>
                                <div class="product-name">
                                    <a href="#"><?php echo $product->name;?></a>
                                </div>
                                <div class="product-price">
                                    <?php if($product->on_sale):?>
                                        <span>Rs.2500</span> Rs.2000
                                    <?php else:?>
                                        Rs.<?php echo $product->regular_price;?>
                                    <?php endif;?>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star unrated"></i>
                                    <i class="fas fa-star unrated"></i>
                                </div>
                                <div class="product-add-cart-button">
                                    <button>Add to cart</button>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
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
                        <?php foreach($products as $product):?>
                        <li class="item-a">        
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="<?php BASE_URI;?>product.php?product=<?php echo $product->id?>"><img src="<?php echo BASE_URI;?>images/products/<?php echo $product->image;?>" alt=""></a>
                                    <a href="#" class="product-quick-view">
                                        <i class="icon-eye" aria-hidden="true"></i>
                                        QUICK VIEW
                                    </a>
                                    <?php if($product->wishlisted):?>
                                        <a class="product-add-wishlist">
                                            <i aria-hidden="true" class="fas fa-heart">Wishlisted</i>
                                        </a>
                                    <?php else:?>
                                    <a class="product-add-wishlist">
                                        <i aria-hidden="true" class="far fa-heart">Add to Wishlist</i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($product->stock_count == 0):?>
                                        <a href="#" class="product-out-stock">
                                            OUT OF STOCK
                                        </a>
                                    <?php endif;?>
                                    <?php if($product->on_sale):?>
                                        <a href="#" class="product-sale">
                                            SALE
                                        </a>
                                    <?php endif;?>
                                    
                                </div>
                                <div class="product-tags">
                                    <a href="#">Jackets,</a>
                                    <a href="#">Men</a>
                                </div>
                                <div class="product-name">
                                    <a href="#"><?php echo $product->name;?></a>
                                </div>
                                <div class="product-price">
                                    <?php if($product->on_sale):?>
                                        <span>Rs.2500</span> Rs.2000
                                    <?php else:?>
                                        Rs.<?php echo $product->regular_price;?>
                                    <?php endif;?>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star unrated"></i>
                                    <i class="fas fa-star unrated"></i>
                                </div>
                                <div class="product-add-cart-button">
                                    <button>Add to cart</button>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                        <!-- Product-box ends here  -->

                        </ul>

                    </div>
                    
                </div>

                <!-- New Products Ends Here -->

                <!-- 20% off banner-ad-section starts here-->

                <div class="twenty-off-banner-ad">
                    <img src="<?php echo BASE_URI;?>images/banners/2020-11-14 22_25_31-Glasses – See world from new prospective.png" alt="">
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
                        <?php foreach($products as $product):?>
                        <li class="item-a">        
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="<?php BASE_URI;?>product.php?product=<?php echo $product->id?>"><img src="<?php echo BASE_URI;?>images/products/<?php echo $product->image;?>" alt=""></a>
                                    <a href="#" class="product-quick-view">
                                        <i class="icon-eye" aria-hidden="true"></i>
                                        QUICK VIEW
                                    </a>
                                    <?php if($product->wishlisted):?>
                                        <a class="product-add-wishlist">
                                            <i aria-hidden="true" class="fas fa-heart">Wishlisted</i>
                                        </a>
                                    <?php else:?>
                                    <a class="product-add-wishlist">
                                        <i aria-hidden="true" class="far fa-heart">Add to Wishlist</i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($product->stock_count == 0):?>
                                        <a href="#" class="product-out-stock">
                                            OUT OF STOCK
                                        </a>
                                    <?php endif;?>
                                    <?php if($product->on_sale):?>
                                        <a href="#" class="product-sale">
                                            SALE
                                        </a>
                                    <?php endif;?>
                                    
                                </div>
                                <div class="product-tags">
                                    <a href="#">Jackets,</a>
                                    <a href="#">Men</a>
                                </div>
                                <div class="product-name">
                                    <a href="#"><?php echo $product->name;?></a>
                                </div>
                                <div class="product-price">
                                    <?php if($product->on_sale):?>
                                        <span>Rs.2500</span> Rs.2000
                                    <?php else:?>
                                        Rs.<?php echo $product->regular_price;?>
                                    <?php endif;?>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star unrated"></i>
                                    <i class="fas fa-star unrated"></i>
                                </div>
                                <div class="product-add-cart-button">
                                    <button>Add to cart</button>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                        <!-- Product-box ends here  -->

                        </ul>
                    </div>
                    
                </div>


                <!-- Top Rated Products Ends Here -->
            </div>
            <!-- Main-boxed-Content Ends Here -->

            <!-- Main bottom section Starts Here -->
            
            <!-- Main-wide-Content Starts Here -->
            <div class="main-wide-content">

            </div>

            <!-- Main-wide-Content Ends Here -->


<?php include('includes/right_sidebar.php');?>
<?php include('includes/footer.php');?>
