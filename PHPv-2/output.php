<?php
    require_once("result.php");
    class Output {
        public function output() {
            if(isset($_POST["peach"])){
                $fruit = "もも";
            }elseif(isset($_POST["strawberry"])){
                $fruit = "いちご";
            }
            $result = new Result();
            $results = $result->callGetResults();
            echo "果物:" . $fruit . "<br/>";
            echo "最大値:" . $results[0] . "円" . "<br/>";
            echo "最低値:" . $results[1] . "円" . "<br/>";
            echo "平均値:" .round($results[2]) . "円" . "<br/>";
        }
    }
    $output = new Output();
    $output->output();
?>