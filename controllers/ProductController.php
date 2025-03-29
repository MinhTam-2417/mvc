<?php

class ProductController
{

    public function index()
    {
        //lấy thông tin của bảng products
        $products = $this->productModel->getAll();
        // debug($products);
        require_once PATH_VIEW . 'ListProduct.php';
    }

    public $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
}

?>