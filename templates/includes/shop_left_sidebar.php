<!-- Left Sidebar Starts Here -->
<div class="shop-left-sidebar">
                <div class="shot-left-sidebar-widgets">

                    <!-- Filter Product by price widget starts here -->

                    <div class="sidebar-widget">
                        <div class="fliter-products-by-price-widget">
                            <div class="widget-heading">
                                <h4>Filter By Price</h4>
                            </div>
                            <div class="widget-body">
                                <hr>
                                <div class="filter-info">
                                    <p>PRICE: Rs.50 - Rs.2000</p>
                                    <button>FILTER</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filter Product by price widget ends here -->

                    <!-- Shop Page follow Us widget starts here -->

                    <div class="sidebar-widget">
                        <div class="shop-followus-widget">
                            <div class="widget-heading">
                                <h4>Follow Us</h4>
                            </div>
                            <div class="widget-body widget-social-icons">
                                <p>We are available on: </p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Shop Page follow Us widget ends here -->

                    <!-- Product Categories list widget starts here -->

                    <div class="sidebar-widget">
                        <div class="shop-product-categores-widget">
                            <div class="widget-heading">
                                <h4>Products Categories</h4>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <?php foreach(getCategories() as $category):?>
                                    <li>
                                        <a href="<?php echo BASE_URI;?>store.php?category=<?php echo $category->id?>" class="shop-product-category active-shop-category">
                                            <div class="category-name">
                                                <div class="category-radio category-active-radio">

                                                </div>
                                                <p>
                                                    <?php echo $category->name;?>
                                                </p>
                                            </div>
                                            <div class="category-item-count">
                                            <?php echo productCountByCategory($category->id);?>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Product Categories list widget starts here -->

                    <div class="sidebar-widget">
                        <div class="shop-top-rated-widget">
                            <div class="widget-heading">
                                <h4>Top Rated Products</h4>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li>
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo BASE_URI;?>images/products/usher2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-name">
                                                <a href="#">
                                                    Jacket Flushed
                                                </a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star unrated"></i>
                                                <i class="fas fa-star unrated"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>Rs.2500</span> Rs.2000
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo BASE_URI;?>images/products/usher2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-name">
                                                <a href="#">
                                                    Jacket Flushed
                                                </a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star unrated"></i>
                                                <i class="fas fa-star unrated"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>Rs.2500</span> Rs.2000
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo BASE_URI;?>images/products/usher2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-name">
                                                <a href="#">
                                                    Jacket Flushed
                                                </a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star unrated"></i>
                                                <i class="fas fa-star unrated"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>Rs.2500</span> Rs.2000
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo BASE_URI;?>images/products/usher2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-name">
                                                <a href="#">
                                                    Jacket Flushed
                                                </a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star rated"></i>
                                                <i class="fas fa-star unrated"></i>
                                                <i class="fas fa-star unrated"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>Rs.2500</span> Rs.2000
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Left Sidebar Ends Here -->