<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Переводчик</title>
</head>
<body>
    <form method="post">
        <label for="digit">Введите цифру:</label>
        <input type="number" name="digit" min="0" max="30000">
    </form>

    <?php
    if (isset($_POST["digit"])) {
        $dig = $_POST["digit"];
        $message = match ($dig) {
            '0' => 'Ноль',
            '1' => 'Один',
            '2' => 'Два',
            '3' => 'Три',
            '4' => 'Четыре',
            '5' => 'Пять',
            '6' => 'Шесть',
            '7' => 'Семь',
            '8' => 'Восемь',
            '9' => 'Девять'
        };
        echo $message;
    }
 
        
    ?>
</body>
</html>