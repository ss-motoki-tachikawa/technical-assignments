<?php
    class Calculation{
        public $max;
        public $min;
        public $avg;

        function getMax($prices) {
            $this->max = max($prices);
            return $this->max;
        }

        function getMin($prices) {
            $this->min = min($prices);
            return $this->min;
        }

        function getAvg($prices) {
            $this->avg = array_sum($prices) / count($prices);
            return $this->avg;
        }
    }