<?php require('core/init.php');?>

<?php

$productLibrary = new Product();

$template = new Template('templates/product_page.php');



if(isset($_GET['product']))
{
    $productId = $_GET['product'];

    // $template->currentproductId = $productId;

    $template->product = $productLibrary->getProductById($productId);
    $template->reviews = $productLibrary->getReviews($productId);
    $template->reviewsCount = $productLibrary->getReviewsCount($productId);
    $template->relatedByCategory = $productLibrary->productByCategory($template->product->category_id);
}

echo $template;

?>