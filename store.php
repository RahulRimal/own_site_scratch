<?php require('core/init.php');?>

<?php

$productLibrary = new Product();

$template = new Template('templates/shop.php');


if(isset($_GET['category']))
{
    $categoryId = $_GET['category'];

    $template->products = $productLibrary->productByCategory($categoryId);
}

elseif(isset($_GET['subcategory']))
{
    $subCategoryId = $_GET['subcategory'];

    $template->products = $productLibrary->productBySubCategory($subCategoryId);
}
else
{
    $template->products = $productLibrary->getProducts();
}

echo $template;
?>