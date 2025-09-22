<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Факториал</title>
</head>
<body>
    <form method="post">
        <label for="number">Введите число:</label>
        <input type="number" name="number" min="0">
    </form>

    <?php
    function factorial($x) {
        if ($x <= 1) {
            return 1;
        } else {
            return $x * factorial($x - 1);
        }
    }

    if (isset($_POST["number"])) {
        $number = $_POST["number"];
        $result = factorial($number);
        echo "<p>Факториал $number = $result</p>";
    }
    ?>
</body>
</html>