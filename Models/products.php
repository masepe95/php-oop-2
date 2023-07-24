<?php
class Product
{
    protected $productType;
    protected $category;
    protected $icon;
    protected $productName;
    protected $price;
    protected $imgPath;

    function __construct(string $_productType, string $_category, string $_productName, float $_price, string $_imgPath)
    {
        $this->productType = $_productType;
        $this->category = $_category;
        $this->productName = $_productName;
        $this->price = $_price;
        $this->imgPath = $_imgPath;
    }

    public function getProductType()
    {
        return $this->productType;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getIcon()
    {
        return $this->icon;
    }
    public function getProductName()
    {
        return $this->productName;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getImgPath()
    {
        return $this->imgPath;
    }
}
