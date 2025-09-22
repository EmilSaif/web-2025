<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/home.css ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <title>Социальная сеть</title>
</head>
<body>
    <img src="src/images/home_point.png" alt="home">
    <img src="src/images/people.png" alt="people">
    <img src="src/images/plus.png" alt="plus"></br>
    <?php
    require_once 'load.php';

    // Фильтрация постов по user_id, если передан параметр
    if (isset($_GET['user_id'])) {
        $userId = (int)$_GET['user_id'];
        if (validateUserIdExists($userId, $users)) {
            $posts = array_filter($posts, fn($p) => $p['user_id'] === $userId);
        } else {
            header('Location: home.php');
            exit();
        }
    }

    foreach ($posts as $post) {
        $author = $users[array_search($post['user_id'], array_column($users, 'id'))];
        $post['author_name'] = $author['name'];
        include 'templates/template_home.php';
    }
    ?> 

</body>
</html>