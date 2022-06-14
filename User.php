<?php
class User {
    public $name;
    public $email;
    public $cart = [];
    public $registered = false;

    function __construct($_name, $_email, $_registered)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->registered = $_registered;
    }

    public function addItemToCard($_product) {
        $this->cart[] = $_product;
    }

    
    public function getTotal() {
        $totalPrice = 0;

        foreach($this->cart as $item) {
            $totalPrice += $item->price;
        }
        if ($this->registered == true) {
            $totalPrice = $totalPrice * 0.5;
        }
        return  $totalPrice;
    }

    public function getRegistered() {
        return $this->registered = true;
    }
}
?>