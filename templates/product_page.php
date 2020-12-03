<?php include('includes/header.php');?>


<!-- Main-wide-Content Starts Here -->
<div class="main-wide-content">
                <div class="product-main-wide-content">
                    <div class="product-image-section">
                        <div class="product-image-first-color">    
                        </div>
                        <div class="product-image-second-color">    
                        </div>
                        <img class="main-product-image" src="<?php echo BASE_URI;?>images/products/<?php echo $product->image?>" alt="">
                    </div>

                    <div class="product-description-section">
                        <?php foreach(getProductCategories($product->category_id) as $category):?>
                            <div class="product-categories">
                                <a href=""><?php echo $category->name;?> </a>
                                <div class="product-sub-categories">
                                    <?php foreach(getSubCategories($category->id) as $subCategory):?>
                                        <a href=""><?php echo $subCategory->name;?></a>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        <?php endforeach;?>

                        <div class="product-name">
                            <a><?php echo $product->name;?></a>
                        </div>

                        <div class="product-rating-section">
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

                                <?php if($i < 4):?>
                                    <?php $j = 4 - $i;
                                        for($k = 0; $k <=  $j; $k++):?>
                                            <i class="fas fa-star unrated"></i>
                                    <?php endfor;?>
                                <?php endif;?>
                                
                            </div>
                            <div class="product-rating-average">
                                <strong>5.0</strong>
                            </div>
                            <div class="product-rating-count">
                                (<?php echo $reviewsCount;?> Reviews)
                            </div>
                        </div>

                        <div class="product-price">
                        <?php if($product->on_sale):?>
                            <span>Rs.<?php echo $product->regular_price;?></span> Rs.<?php echo $product->sale_price;?>
                            <?php else:?>
                                Rs.<?php echo $product->regular_price;?>
                        <?php endif;?>
                        </div>

                        <div class="product-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere assumenda dolor doloribus. Corporis doloremque expedita autem ratione dolore temporibus.Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet.
                        </div>

                        <div class="product-attributes">
                            <div class="product-color-section">
                                Color
                                <div class="product-color product-color-red">
                                </div>
                                <div class="product-color product-color-orange active-color">
                                    
                                </div>
                                <div class="product-color product-color-blue">
                                    
                                </div>
                            </div>
                            <div class="product-size">
                                Size
                                <select>
                                    <option class="active-size" value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                </select>
                            </div>
                        </div>

                        <div class="product-cart-section">
                            <div class="product-page-cart">

                                <div class="product-incre-decre">
                                    <button class="decrement-product-count" onclick="decrementItemCount()">
                                        <strong>-</strong>
                                    </button>
                                    <div class="current-product-count">
                                        <strong>1</strong>
                                    </div>
                                    <button class="increment-product-count" onclick="incrementItemCount()">
                                        <strong>+</strong>
                                    </button>
                                </div>

                                <div class="product-add-to-cart">
                                    <button>ADD TO CART</button>
                                </div>
                            </div>
                            <a href="#" class="product-page-add-wishlist">
                                <i aria-hidden="true" class="far fa-heart"></i>
                                Add to Wishlist
                            </a>
                        </div>

                        <div class="product-img-gallery">
                            <div class="gallery-img-div active-image">
                                <img class="gallery-img" src="<?php echo BASE_URI;?>images/products/productPng.png" onclick="setActiveImage(this)" alt="">
                                <div class="gallery-overlay gallery-img-overlay"></div>
                            </div>
                            
                            <div class="gallery-img-div">
                                <img class="gallery-img" src="<?php echo BASE_URI;?>images/products/armor.png" onclick="setActiveImage(this)" alt="">
                                <div class="gallery-overlay gallery-img-overlay-inactive"></div>
                            </div>
                            <div class="gallery-img-div">
                                <img class="gallery-img" src="<?php echo BASE_URI;?>images/products/dark-265x331.png" onclick="setActiveImage(this)" alt="">
                                <div class="gallery-overlay gallery-img-overlay-inactive"></div>
                            </div>
                            <div class="gallery-img-div">
                                <img class="gallery-img" src="<?php echo BASE_URI;?>images/products/usher-265x331.png" onclick="setActiveImage(this)" alt="">
                                <div class="gallery-overlay gallery-img-overlay-inactive"></div>
                            </div>
                            <div class="gallery-img-div">
                                <img class="gallery-img" src="<?php echo BASE_URI;?>images/products/usher2.png" onclick="setActiveImage(this)" alt="">
                                <div class="gallery-overlay gallery-img-overlay-inactive"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Main-wide-Content Ends Here -->

<?php include('includes/shop_left_sidebar.php');?>

<!-- Main-boxed-Content Starts Here -->
<div class="shop-main-boxed-content">
                    <div class="product-desc-review-tab">
                        <div class="product-desc-review-title">
                            <button class="product-desc-btn active-tab" onclick="showFullDescription(this)">DESCRIPTION</button>
                            <button class="product-review-btn" onclick="showFullReview(this)">REVIEWS (<?php echo $reviewsCount;?>)</button>
                        </div>
                    </div>

                    <div class="product-full-description-body">
                        <div class="description-title">
                            Description
                        </div>
                        <div class="description-body">
                            <?php echo $product->description;?>
                        </div>
                    </div>

                    <div class="product-review-body">
                        <div class="review-title">
                            Reviews
                        </div>
                        <div class="review-body">
                            <?php if($reviewsCount > 0):?>
                                <?php foreach($reviews as $review):?>
                                    <div class="user-reviews">
                                        <div class="user-review">
                                            <div class="user-avatar">
                                                <img src="<?php echo BASE_URI;?>images/avatars/<?php echo $review->image?>" alt="">
                                            </div>
                                            <div class="user-info-review-body">
                                                <div class="user-name-review-date-rating">
                                                    <div class="name-and-date">
                                                        <div class="user-name">
                                                            <strong><?php echo $review->first_name;?> <?php echo $review->last_name;?></strong>
                                                        </div>
                                                        <div class="review-date">
                                                            <!-- April 8, 2020 -->
                                                            <?php echo CustomFormatDate($review->created_date);?>
                                                        </div>
                                                    </div>
                                                    <div class="user-rating">
                                                        <div class="product-rating">
                                                            <?php
                                                                if($review->rating > 5)
                                                                {
                                                                    $rating = 5;
                                                                }
                                                                else
                                                                {
                                                                    $rating = $review->rating;
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
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <?php echo $review->review_body;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            <?php else:?>
                                <h2 class="no-reviews-available">No reviews Available</h2>
                            <?php endif;?>
                        </div>
                        <div class="add-new-review">
                            <form>
                                <label>Your rating</label>
                                <div class="get-rating">
                                    <div class="product-rating">
                                    <i class="fas fa-star unrated"></i>
                                    <i class="fas fa-star unrated"></i>
                                    <i class="fas fa-star unrated"></i>
                                    <i class="fas fa-star unrated"></i>
                                    <i class="fas fa-star unrated"></i>
                                    </div>
                                </div>
                                <br>
                                <label>Your Review</label><br>
                                <textarea cols="100" rows="10"></textarea><br>
                                <input type="text" placeholder="Name" required>
                                <input type="email" placeholder="Email" required>
                                <div class="give-review">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="product-page-related-products">
                        <div class="related-products-title">
                            Related Products
                        </div>
                        <div class="product-section">
                        <ul class="productsLightSlider" class="cs-hidden">
                            <?php foreach($relatedByCategory as $relatedProduct):?>
                                <!-- Product-box starts here  -->
                            <li class="item-a">
                                <div class="product-box">
                                    <div class="product-img">
                                        <a href="<?php BASE_URI;?>product.php?product=<?php echo $product->id?>"><img src="<?php echo BASE_URI;?>images/products/<?php echo $relatedProduct->image;?>" alt=""></a>
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
                                        <?php if($relatedProduct->stock_count == 0):?>
                                            <a href="#" class="product-out-stock">
                                                OUT OF STOCK
                                            </a>
                                        <?php endif;?>
                                        <?php if($relatedProduct->on_sale):?>
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
                                        <a href="#"><?php echo $relatedProduct->name;?></a>
                                    </div>
                                    <div class="product-price">
                                        <?php if($relatedProduct->on_sale):?>
                                            <span>Rs.2500</span> Rs.2000
                                        <?php else:?>
                                            Rs.<?php echo $relatedProduct->regular_price;?>
                                        <?php endif;?>
                                    </div>
                                    <div class="product-rating">
                                        <?php
                                            if($relatedProduct->average_rating > 5)
                                            {
                                                $rating = 5;
                                            }
                                            else
                                            {
                                                $rating = $relatedProduct->average_rating;
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
                            </li>
                            <!-- Product-box ends here  -->    
                            <?php endforeach;?>
                        </ul>
                        </div>
                    </div>

                </div>
            <!-- Main-boxed-Content Ends Here -->
        </div>
        <!-- Main top section ends Here -->

        <!-- Main bottom section Starts Here -->
        <div class="main-bottom-content">

        </div>

    <script src="<?php echo BASE_URI;?>templates/js/single_product.js"></script>

<?php include('includes/footer.php');?>