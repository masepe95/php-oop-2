<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/category.php';

class Misc extends Product
{
    public $material;
    public $size;

    function __construct(
        Category $_category,
        string $_productName,
        string $_price,
        string $_imgPath,
        string $_material,
        string $_size
    ) {
        parent::__construct(
            $_category,
            $_productName,
            $_price,
            $_imgPath
        );

        $this->material = $_material;
        $this->size = $_size;
    }
}
