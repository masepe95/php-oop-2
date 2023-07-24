<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/category.php';

class Toy extends Product
{
    public $features;
    public $size;

    function __construct(
        Category $_category,
        string $_productName,
        string $_price,
        string $_imgPath,
        string $_features,
        string $_size
    ) {
        parent::__construct(
            $_category,
            $_productName,
            $_price,
            $_imgPath
        );

        $this->features = $_features;
        $this->size = $_size;
    }
}
