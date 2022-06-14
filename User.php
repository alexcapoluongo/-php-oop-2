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
            $totalPrice = ($totalPrice * 0.8);
            echo 'Essendo registrato il tuo prezzo sarà scontato del 20%. ';
            
        }
        return  $totalPrice;
    }

    public function getRegistered() {
        return $this->registered = true;
    }
}
?>