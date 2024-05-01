<?php
    class Product{
        public $id;
        public $name;
        public $price;
        public $image;
        public $quantity;
        public function __construct($id, $name, $price, $image, $quantity){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->quantity = $quantity;
        }
    }
    $product = new Product(1,"he he",123,"lik",5);
    $product_json = json_encode($product);
    setcookie("product_cookie", $product_json, time() + (86400 * 30), "/");

?>