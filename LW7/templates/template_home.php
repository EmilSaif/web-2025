<img class="home_person" src="<?= htmlspecialchars($users[$post['user_id'] - 1]['avatar']) ?>" alt="ава">
<a class="home_surname" href="profile.php?id=<?= $post['user_id'] ?>"><?= htmlspecialchars($post['author_name']) ?></a>
<button class="like"><img src="src/images/pen.png" alt="редактировать"></button><br>
<img class="home_photo" src="<?= htmlspecialchars($post['image']) ?>" alt="фото из профиля"><br>
<button class="like"><img src="src/images/like.png" alt="лайки"><?= htmlspecialchars($post['likes']) ?></button>
<p class="home_comment"><?= htmlspecialchars($post['description']) ?></p>
<a class="home_more">еще</a>
<p class="home_time"><?= date('d.m.Y', $post['date']) ?></p>
