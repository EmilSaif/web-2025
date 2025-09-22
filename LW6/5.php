<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Счастливые билеты</title>
</head>
<body>
    <form method="post">
        <label>Начальный номер: <input type="number" name="ticket1" min="100000" max="999999"></label><br><br>
        <label>Конечный номер: <input type="number" name="ticket2" min="100000" max="999999"></label><br><br>
        <input type="submit" value="Найти счастливые билеты">
    </form>

    <?php
    function sumDigits($num) {
        $sum = 0;
        $num = (int)$num;
        while ($num > 0) {
            $sum += $num % 10;
            $num = (int)($num / 10);
        }
        return $sum;
    }

    if (isset($_POST["ticket1"]) && isset($_POST["ticket2"])) {
        $num1 = (int)$_POST["ticket1"];
        $num2 = (int)$_POST["ticket2"];
        
        echo "<p>Счастливые билеты в диапазоне от $num1 до $num2:</p>";
     
        
        for ($i = $num1; $i <= $num2; $i++) {
            $first = (int)($i / 1000);
            $second = $i % 1000;
            
            if (sumDigits($first) == sumDigits($second)) {
                echo $i . "<br>";
            }
        }
        
    }
    ?>
</body>
</html>