<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Знак зодиака</title>
</head>
<body>
    <form method="post">
        <label for="date">Введите дату (ДД.ММ.ГГГГ):</label>
        <input type="text" name="date" placeholder="ДД.ММ.ГГГГ">
    </form>

    <?php
    if (isset($_POST["date"]) && $_POST["date"] !== "") {
        $date = $_POST["date"];
        $parts = explode(".", $date);
        
        if (count($parts) === 3) {
            $day = $parts[0];
            $month = $parts[1];
            
            if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
                echo "<p>Овен</p>";
            } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
                echo "<p>Телец</p>";
            } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
                echo "<p>Близнецы</p>";
            } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
                echo "<p>Рак</p>";
            } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
                echo "<p>Лев</p>";
            } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
                echo "<p>Дева</p>";
            } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
                echo "<p>Весы</p>";
            } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
                echo "<p>Скорпион</p>";
            } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
                echo "<p>Стрелец</p>";
            } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
                echo "<p>Козерог</p>";
            } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
                echo "<p>Водолей</p>";
            } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
                echo "<p>Рыбы</p>";
            }
        } else {
            echo "<p>Неверный формат даты. Введите в формате ДД.ММ.ГГГГ</p>";
        }
    }
    ?>
</body>
</html>