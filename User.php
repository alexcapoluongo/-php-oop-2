<?php
class User {
    public $name;
    public $email;
    public $card = [];

    function __construct($_name, $_email)
    {
        $this->name = $_name;
        $this->email = $_email;
    }

    public function addItemToCard($_product) {
        $this->card[] = $_product;
    }
}
?>