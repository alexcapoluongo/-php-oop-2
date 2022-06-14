<?php
class User {
    public $name;
    public $email;
    public $expire_date;
    public $cart = [];
    public $registered = false;

    function __construct($_name, $_email, $_registered, $_expire_date)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->registered = $_registered;
        $this->expire_date = $_expire_date;
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

    public function insertCard() {
        $today = date("Y");
        var_dump($today);
        if ($this->expire_date > $today) {
            echo 'you can buy';
        } else {
            echo 'your card is expired';
        }
    }
}
?>