<!-- 結果を返す画面　桃クラスから価格を受け取って、計算クラスに渡す。 -->
<?php
    require_once("peach.php");
    require_once("strawberry.php");
    require_once("calculation.php");
    class Result{
        public function setFruits() {
            if(isset($_POST["peach"])){
                $fruits = new Peach();
            }elseif(isset($_POST["strawberry"])){
                $fruits = new Strawberry();
            }
            return $fruits;
        }
        public function callFruits() {
            $fruits = $this->setFruits();
            $prices = $fruits->callGetPrice();
            return $prices;
        }
        public function callCalculation() {
            $calculation = new Calculation();
            $prices = $this->callFruits();
            $results = $calculation->getResult($prices);
            return $results;
        }

        public function output($fruit) {
            $results = $this->callCalculation();
            echo "果物:" . $fruit . "<br/>";
            echo "最大値:" . $results[0] . "円" . "<br/>";
            echo "最低値:" . $results[1] . "円" . "<br/>";
            echo "平均値:" .round($results[2]) . "円" . "<br/>";
        }
    }
    
?>
