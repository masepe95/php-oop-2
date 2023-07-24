<?php
require_once __DIR__ . '/category.php';
class Product
{
    public $category;
    public $productName;
    public $price;
    public $imgPath;

    function __construct(Category $_category, string $_productName, string $_price, string $_imgPath)
    {
        $this->category = $_category;
        $this->productName = $_productName;
        $this->price = $_price;
        $this->imgPath = $_imgPath;
    }

    // public function getCategory()
    // {
    //     return $this->category;
    // }
    // public function getProductName()
    // {
    //     return $this->productName;
    // }
    // public function getPrice()
    // {
    //     return $this->price;
    // }

    // public function getImgPath()
    // {
    //     return $this->imgPath;
    // }
}
