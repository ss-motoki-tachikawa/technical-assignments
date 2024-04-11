<?php
    class Fruit {
        protected function getPrice($min_price, $max_price) {
            for( $num = 0; $num < 15; $num++ ) {
                $prices[] = rand($min_price, $max_price);
            }
            return $prices;
        }
    }
?>