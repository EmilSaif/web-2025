<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Високосный год</title>
</head>
<body>
    <form method="post">
        <label for="year">Введите год:</label>
        <input type="number" name="year" min="1" max="30000">
    </form>

    <?php
    if (!empty($_POST["year"])) {
        $year = $_POST["year"];
        if (($year % 4 == 0 && $year % 100 != 0) or ($year % 400 == 0)) {
            echo "<p>YES</p>";
        } else {
            echo "<p>NO</p>";
        }
    }
    ?>
</body>
</html>