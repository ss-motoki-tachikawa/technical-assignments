<?php
    require_once("calculation.php");
    // フォームから送られた情報を格納
    if( isset($_POST["fruits"]) && isset($_POST["min_price"]) && isset($_POST["max_price"]) ){
        $fruits = htmlspecialchars( $_POST["fruits"], ENT_QUOTES );
        $min_price = htmlspecialchars( $_POST["min_price"], ENT_QUOTES );
        $max_price = htmlspecialchars( $_POST["max_price"], ENT_QUOTES );   
    }
    $prices = array();
    // ランダムに15個の果物の値段を取得
    for( $num = 0; $num < 15; $num++ ) {
        $prices[] = rand($min_price, $max_price);
    }
    // インスタンス化と関数の呼び出し
    // $calculation = new Calculation();
    $max_result = Calculation::getMax($prices);
    $min_result = Calculation::getMin($prices);
    $avg_result = round(Calculation::getAvg($prices));
    echo "<strong>" . $fruits . "</strong>";
    echo "<br />";
    echo "最高値は、" . "<strong>" . $max_result . "</strong>" . "です。";
    echo "<br />";
    echo "最低値は、" . "<strong>" . $min_result . "</strong>" . "です。";
    echo "<br />";
    echo "平均値は、" . "<strong>" . $avg_result . "</strong>" . "です。";
?>
