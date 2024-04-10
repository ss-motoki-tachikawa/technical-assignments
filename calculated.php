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
    $calculation = new Calculation();
    $max_result = $calculation->getMax($prices);
    $min_result = $calculation->getMin($prices);
    $avg_result = round($calculation->getAvg($prices));
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <p><?php echo $fruits; ?></p>
    <p>最高値は、<?php echo $max_result; ?>です。</p>
    <p>最低値は、<?php echo $min_result; ?>です。</p>
    <p>平均値は、<?php echo $avg_result; ?>です。</p>
</body>
</html>

