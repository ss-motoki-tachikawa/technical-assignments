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
        public function Results() {
            $fruits = $this->setFruits();
            $prices = $fruits->callGetPrice();
            $calculation = $this->callCalculation();
            $results = $calculation->getResult($prices);
            return $results;
        }
        public function output($fruit) {
            $results = $this->Results();
            echo "果物:" . $fruit . "<br/>";
            echo "最大値:" . $results[0] . "円" . "<br/>";
            echo "最低値:" . $results[1] . "円" . "<br/>";
            echo "平均値:" .round($results[2]) . "円" . "<br/>";
        }
    }
    
?>
