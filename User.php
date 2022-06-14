<?php
class User {
    public $name;
    public $email;
    public $cart = [];

    function __construct($_name, $_email)
    {
        $this->name = $_name;
        $this->email = $_email;
    }

    public function addItemToCard($_product) {
        $this->cart[] = $_product;
    }

    public function getTotal() {
        $totalPrice = 0;
        foreach($this->cart as $item) {
            $totalPrice += $item->price;
        }
        return "il tuo carrello totale è di $totalPrice €";
    }
}
?>