<?php require('core/init.php');?>

<?php

$productLibrary = new Product();

$template = new Template('templates/frontpage.php');


$template->carouselImages = getCarousel();
$template->products = $productLibrary->getProducts();

echo $template;

?>