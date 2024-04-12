<?php
    require_once("fruit.php");
    class Peach extends Fruit{
        public function __construct(){
            $this->min_price = 200;
            $this->max_price = 300;
        }
    }
?>