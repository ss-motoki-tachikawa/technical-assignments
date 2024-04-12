<?php
    require_once("fruit.php");
    class Strawberry extends Fruit{
        public function __construct(){
            $this->min_price = 400;
            $this->max_price = 500;
        }
    }
?>