<?php
    require_once("fruit.php");
    class Peach extends Fruit{
        public $min_price = 200;
        public $max_price = 300;

        public function callGetPrice(){
            $prices = $this->getPrice($this->min_price, $this->max_price);
            return $prices;
        }
    }
?>