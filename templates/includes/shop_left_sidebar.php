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
                                    <li class="shop-category">
                                        <a href="<?php echo BASE_URI;?>store.php?category=<?php echo $category->id?>" class="shop-product-category active-shop-category"onmouseover="showSubCate(this)" onmouseout="hideSubCate(this)">
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
                                    <ul class="shop-sub-category hide-this">
                                    <?php foreach(getSubCategories($category->id) as $subCategory):?>   
                                        <li><a class="sub-category-item shop-product-sub-category" href="<?php echo BASE_URI;?>store.php?subcategory=<?php echo $subCategory->id?>" onmouseover="showBySubCate(this)" onmouseout="hideBySubCate(this)">
                                        <div class="sub-category-name">
                                            <div class="category-radio">
                                            </div>
                                            <p>
                                                <?php echo $subCategory->name;?>
                                            </p>
                                        </div>
                                        <div class="sub-category-item-count">
                                            <?php echo productCountBySubCategory($category->id);?>
                                            </div>
                                    </a></li>
                                    <?php endforeach;?>
                                    </ul>
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
                                    <?php foreach(topRatedproducts() as $product):?>
                                    <li>
                                        <div class="product-img">
                                            <a href="<?php BASE_URI;?>product.php?product=<?php echo $product->id?>"><img src="<?php echo BASE_URI;?>images/products/<?php echo $product->image;?>" alt=""></a>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-name">
                                                <a href="<?php BASE_URI;?>product.php?product=<?php echo $product->id?>">
                                                    <?php echo $product->name;?>
                                                </a>
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
                                                <div class="product-price">
                                                    <?php if($product->on_sale):?>
                                                        <span>Rs.<?php echo $product->regular_price;?></span> Rs.<?php echo $product->sale_price;?>
                                                    <?php else:?>
                                                        Rs.<?php echo $product->regular_price;?>
                                                    <?php endif;?>
                                                </div>
                                        </div>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Sidebar Ends Here -->
    
    <script src="<?php echo BASE_URI;?>templates/js/shop_sidebar.js"></script>