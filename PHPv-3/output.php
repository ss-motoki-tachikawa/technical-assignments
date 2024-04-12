<?php
    require_once("fruit.php");
    require_once("peach.php");
    require_once("strawberry.php");
    require_once("calculation.php");
    class Output{
        public function setFruits() {
            if(isset($_POST["peach"])){
                $fruit = new Peach();
            }
            if(isset($_POST["strawberry"])){
                $fruit = new Strawberry();
            }
            return $fruit;
        }
        public function output() {
            $fruit = new Fruit();
            $prices = array();
            for( $num = 0; $num < $fruit->number_of_pieces; $num++ ) {
                $fruit = $this->setFruits();
                $prices[$num] = rand($fruit->min_price, $fruit->max_price);
            }
            return $prices;
        }
    }
    $output = new Output();
    $fruits = $output->output();
    foreach($fruits as $num => $fruit){
        echo "No" . $num + 1 . " " . $fruit . "円" . "<br>";
    }
    $prices = array_values($fruits);
    $calculation = new Calculation();
    $results = $calculation->getResult($prices);
    echo "最大値" . $results[0] . "円" . " 最安値" . $results[1] . "円" . " 平均値" . round($results[2]) . "円";

?>