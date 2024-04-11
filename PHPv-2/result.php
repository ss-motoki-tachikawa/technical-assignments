<?php
    require_once("peach.php");
    require_once("strawberry.php");
    require_once("calculation.php");
    class Result{
        public function setFruits() {
            if(isset($_POST["peach"])){
                $fruits = new Peach();
            }
            if(isset($_POST["strawberry"])){
                $fruits = new Strawberry();
            }
            return $fruits;
        }
        public function callCalculation() {
            $calculation = new Calculation();
            return $calculation;
        }
        public function callGetResults() {
            $fruits = $this->setFruits();
            $prices = $fruits->callGetPrice();
            $calculation = $this->callCalculation();
            $results = $calculation->getResult($prices);
            return $results;
        }
    }
    
?>
