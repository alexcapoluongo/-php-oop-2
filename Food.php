<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
    public $material;
    public $calories;

    function __construct($_category, $_name, $_price, $_material, $_calories) {
        parent::__construct($_category, $_name, $_price);
        $this->material = $_material;
        $this->calories = $_calories;
    }
}
?>