<?php
    require_once("fruit.php");
    class Strawberry extends Fruit{
        public $min_price;
        public $max_price;
        public function __construct(){
            $this->min_price = 200;
            $this->max_price = 300;
        }
        public function callGetPrice(){
            $prices = $this->getPrice($this->min_price, $this->max_price);
            return $prices;
        }
    }
?>