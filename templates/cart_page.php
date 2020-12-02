<?php include('includes/header.php');?>


<!-- Main-boxed-Content Starts Here -->
            <div class="cart-page-main-boxed-content">
                <div class="main-cart-content">
                    <table>
                        <tr>
                            <th> </th>
                            <th>PRODUCT</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>SUBTOTAL</th>
                        </tr>
                        <tr>
                            <td class="cart-product-img">
                                <i class="far fa-times-circle"></i>
                                <img src="<?php echo BASE_URI;?>images/products/productPng.png" alt="">
                            </td>
                            <td>Armor Twist</td>
                            <td>
                                <div class="product-price">
                                    Rs.2000
                                </div>
                            </td>
                            <td>
                                <div class="product-incre-decre">
                                    <button class="decrement-product-count">
                                        <strong>-</strong>
                                    </button>
                                    <div class="current-product-count">
                                        <strong>1</strong>
                                    </div>
                                    <button class="increment-product-count">
                                        <strong>+</strong>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="product-price">
                                    Rs.2000
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart-product-img">
                                <i class="far fa-times-circle"></i>
                                <img src="<?php echo BASE_URI;?>images/products/armor.png" alt="">
                            </td>
                            <td>Armor Twist</td>
                            <td>
                                <div class="product-price">
                                    Rs.2000
                                </div>
                            </td>
                            <td>
                                <div class="product-incre-decre">
                                    <button class="decrement-product-count">
                                        <strong>-</strong>
                                    </button>
                                    <div class="current-product-count">
                                        <strong>1</strong>
                                    </div>
                                    <button class="increment-product-count">
                                        <strong>+</strong>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="product-price">
                                    Rs.2000
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="coupon-and-update-cart">
                        <div class="apply-coupon-section">
                            <input type="text" placeholder="Coupon Code">
                            <button>APPLY COUPON</button>
                        </div>
                        <div class="update-cart">
                            <button>UPDATE CART</button>
                        </div>
                    </div>
                </div>
                <div class="cart-related-and-total">
                    <div class="cart-related-products">
                        <div class="cart-related-heading">
                            You may be interested in…
                        </div>
                        <div class="product-section">
                            <!-- Product-box starts here  -->
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="#"><img src="<?php echo BASE_URI;?>images/products/usher-265x331.png" alt=""></a>
                                    <a href="#" class="product-quick-view">
                                        <i class="icon-eye" aria-hidden="true"></i>
                                        QUICK VIEW
                                    </a>
                                    <a href="#" class="product-add-wishlist">
                                        <i aria-hidden="true" class="far fa-heart"></i>
                                        Add to Wishlist
                                    </a>
                                    <a href="#" class="product-sale">
                                        SALE
                                    </a>
                                </div>
                                <div class="product-tags">
                                    <a href="#">Jackets,</a>
                                    <a href="#">Men</a>
                                </div>
                                <div class="product-name">
                                    <a href="#">Jacket Flushed</a>
                                </div>
                                <div class="product-price">
                                    <span>Rs.2500</span> Rs.2000
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
    
                            <!-- Product-box ends here  -->
    
                                    <!-- Product-box starts here  -->
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="#"><img src="<?php echo BASE_URI;?>images/products/usher-265x331.png" alt=""></a>
                                    <a href="#" class="product-quick-view">
                                        <i class="icon-eye" aria-hidden="true"></i>
                                        QUICK VIEW
                                    </a>
                                    <a href="#" class="product-add-wishlist">
                                        <i aria-hidden="true" class="far fa-heart"></i>
                                        Add to Wishlist
                                    </a>
                                    <a href="#" class="product-sale">
                                        SALE
                                    </a>
                                </div>
                                <div class="product-tags">
                                    <a href="#">Jackets,</a>
                                    <a href="#">Men</a>
                                </div>
                                <div class="product-name">
                                    <a href="#">Jacket Flushed</a>
                                </div>
                                <div class="product-price">
                                    <span>Rs.2500</span> Rs.2000
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
    
                            <!-- Product-box ends here  -->
                        </div>
                    </div>
                    <div class="cart-total">
                        <div class="cart-total-heading">
                            Cart Totals
                        </div>

                        <div class="cart-total-body">
                            <div class="cart-subtotal">
                                <div class="title"><strong>Subtotal</strong></div>
                                <div class="amount product-price">Rs.778</div>
                            </div>

                            <div class="cart-total-amount">
                                <div class="title"><strong>Total</strong></div>
                                <div class="amount product-price"><strong>Rs.778</strong></div>
                            </div>
                            <div class="proceed-to-checkout">
                                <button>PROCEED TO CHECKOUT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main-boxed-Content Ends Here -->


<?php include('includes/right_sidebar.php');?>
<?php include('includes/footer.php');?>
