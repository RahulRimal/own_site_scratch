<?php include('includes/header.php');?>
<?php include('includes/shop_left_sidebar.php');?>


<!-- Main-boxed-Content Starts Here -->
<div class="shop-main-boxed-content">
                <div class="product-section">
                    <?php foreach($products as $product):?>
                        <!-- Product-box starts here  -->
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
                                <div class="product-categories">
                                    <a href="#">Jackets,</a>
                                    <a href="#">Men</a>
                                </div>
                                <div class="product-name">
                                    <a href="#"><?php echo $product->name;?></a>
                                </div>
                                <div class="product-price">
                                    <?php if($product->on_sale):?>
                                        <span><?php echo $product->regular_price;?></span> Rs.<?php echo $product->sale_price;?>
                                    <?php else:?>
                                        Rs.<?php echo $product->regular_price;?>
                                    <?php endif;?>
                                </div>
                                <div class="product-rating">
                                    <?php
                                        if($product->average_rating > 5)
                                        {
                                            $rating = 5;
                                        }
                                        else
                                        {
                                            $rating = $product->average_rating;
                                        }
                                        for($i = 0; $i < $rating; $i++):?>
                                            <i class="fas fa-star rated"></i>
                                        <?php endfor;?>

                                        <?php if($i < 5):?>
                                            <?php $j = 4 - $i;
                                                for($k = 0; $k <=  $j; $k++):?>
                                                    <i class="fas fa-star unrated"></i>
                                            <?php endfor;?>
                                        <?php endif;?>
                                </div>
                                <div class="product-add-cart-button">
                                    <button>Add to cart</button>
                                </div>
                            </div>
                    <!-- Product-box ends here  -->
                    <?php endforeach;?>
            </div>
            </div>
            <!-- Main-boxed-Content Ends Here -->
        </div>
        <!-- Main top section ends Here -->

        <!-- Main bottom section Starts Here -->
        <div class="main-bottom-content">
            
            <!-- Main-wide-Content Starts Here -->
            <div class="main-wide-content">

            </div>

            <!-- Main-wide-Content Ends Here -->


<?php include('includes/footer.php');?>