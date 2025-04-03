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
    public $cateModel;
    public function __construct()
    {
        $this->cateModel = new CateModel();
        $this->productModel = new ProductModel();
    }

    public function deleteProduct()
    {
        $id = $_GET['id'];
        $this->productModel->deleteProduct($id);
        $this->index();
    }

    public function addProduct()
    {
        $categories = $this->cateModel->getAll();
        require_once PATH_VIEW . 'AddProduct.php';
    }

    public function addProcess()
    {

        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_POST['img'];
        $cate_id = $_POST['cate_id'];

        if (!$name || !$price || !$img || !$cate_id) {
            die("Vui lòng nhập đầy đủ thông tin sản phẩm!");
        }

        $this->productModel->Insert($name, $price, $img, $cate_id);
        $this->index();
    }
}