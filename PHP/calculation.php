<?php
    class Calculation{
        public static function getMax($prices) {
            $max = max($prices);
            return $max;
        }

        public static function getMin($prices) {
            $min = min($prices);
            return $min;
        }

        public static function getAvg($prices) {
            $avg = array_sum($prices) / count($prices);
            return $avg;
        }
    }