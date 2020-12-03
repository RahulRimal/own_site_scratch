<?php

class Product
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getProducts()
    {
        $this->db->query("SELECT * FROM `product`");
        return $this->db->resultset();
    }

    public function getProductById($id)
    {
        $this->db->query("SELECT * FROM `product` WHERE id=:productId");
        $this->db->bind('productId', $id);
        $product = $this->db->single();
        return $product;
    }

    public function productByCategory($categoryId)
    {
        $this->db->query("SELECT * FROM `product` WHERE category_id = :cateegoryId");
        $this->db->bind('cateegoryId',$categoryId);
        return $this->db->resultset();
    }

    public function productBySubCategory($subCategoryId)
    {
        $this->db->query("SELECT * FROM `product` WHERE sub_category_id = :subCategoryId");
        $this->db->bind('subCategoryId',$subCategoryId);
        return $this->db->resultset();
    }

    public function getReviewsCount($productId)
    {
        $this->db->query("SELECT * FROM `reviews` WHERE product_id=:productId");
        $this->db->bind('productId', $productId);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getReviews($productId)
    {
        $this->db->query("SELECT reviews.*, user.first_name, user.last_name, user.image FROM reviews
                            INNER JOIN user
                            ON reviews.user_id = user.id
                            INNER JOIN product
                            ON reviews.product_id = product.id
                            WHERE product_id = :productId
                            ");

        $this->db->bind('productId', $productId);
        return $this->db->resultset();
    }

}


?>