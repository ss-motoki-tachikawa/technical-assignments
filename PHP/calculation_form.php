<!DOCTYPE html>
<head>
</head>
<body>
    <p>果物の変動価格から最大値、最低値、平均値を求めます。</p>
    <form action="calculated.php" method="post">
        <p>計算したい果物<input type="text" name="fruits" /></p>
        <p>変動する最低値<input type="number" name="min_price" /></p>
        <p>変動する最高値<input type="number" name="max_price" /></p>
        <input type="submit" value="計算" />
    </form>
</body>
</html>