<?php

class Category
{
    public $name;
    public $icon;

    function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    // public function getName()
    //     {
    //         return $this->name;
    //     }
    //     public function getIcon()
    //     {
    //         return $this->icon;
    //     }
}
