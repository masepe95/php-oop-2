<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/category.php';

class Food extends Product
{
    public $type;
    public $ingredients;
    public $servingSize;

    function __construct(
        Category $_category,
        string $_productName,
        string $_price,
        string $_imgPath,
        string $_type,
        string $_ingredients,
        string $_servingSize
    ) {
        parent::__construct(
            $_category,
            $_productName,
            $_price,
            $_imgPath
        );

        $this->type = $_type;
        $this->ingredients = $_ingredients;
        $this->servingSize = $_servingSize;
    }
}
