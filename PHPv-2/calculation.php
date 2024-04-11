<?php
    class Calculation{
        public function getMax($prices) {
            $max = max($prices);
            return $max;
        }

        public function getMin($prices) {
            $min = min($prices);
            return $min;
        }

        public function getAvg($prices) {
            $avg = array_sum($prices) / count($prices);
            return $avg;
        }

        public function getResult($prices){
            $results = [$this->getMax($prices), $this->getMin($prices), $this->getAvg($prices)];
            return $results;
        }
    }