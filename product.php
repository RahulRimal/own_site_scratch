<?php require('core/init.php');?>

<?php

$productLibrary = new Product();

$template = new Template('templates/product_page.php');



if(isset($_GET['product']))
{
    $productId = $_GET['product'];

    $template->product = $productLibrary->getProductById($productId);
    $template->reviews = $productLibrary->getReviews($productId);
    $template->reviewsCount = $productLibrary->getReviewsCount($productId);
    $template->relatedByCategory = $productLibrary->relatedProductByCategory($template->product->category_id);
}

echo $template;

?>