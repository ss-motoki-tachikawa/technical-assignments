<?php
    require_once("fruit.php");
    class Strawberry extends Fruit{
        public $min_price = 400;
        public $max_price = 500;

        public function callGetPrice(){
            $prices = $this->getPrice($this->min_price, $this->max_price);
            return $prices;
        }
    }
?>