<?php
require_once 'load.php';

// Если параметр id не передан - редирект на home.php
if (!isset($_GET['id'])) {
    header('Location: home.php');
    exit();
}

// Получение ID пользователя
$userId = (int)$_GET['id'];

// Поиск пользователя
$user = null;
foreach ($users as $u) {
    if ($u['id'] === $userId) {
        $user = $u;
        break;
    }
}

// Редирект, если пользователь не найден
if (!$user) {
    header('Location: home.php');
    exit();
}

// Фильтрация постов пользователя
$userPosts = array_filter($posts, fn($p) => $p['user_id'] === $userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="src/styles/profile.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <title>Профиль: <?= htmlspecialchars($user['name']) ?></title>
</head>
<body>
    <!-- Блок навигации -->
    <img src="src/images/home.png" alt="home">
    <img src="src/images/people_point.png" alt="people">
    <img src="src/images/plus.png" alt="plus"></br>

    <!-- Подключение шаблона профиля -->
    <?php include 'templates/template_profile.php'; ?>
</body>
</html>