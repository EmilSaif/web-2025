<img class="profile_man" src="<?= htmlspecialchars($user['avatar']) ?>" alt="аватарка">
<h1 class="profile_surname"><?= htmlspecialchars($user['name']) ?></h1>
<p class="profile_about"><?= htmlspecialchars($user['description'] ?? '') ?></p>
<button class="profile_counter"><img src="src/images/Count_posts.svg" alt="счетчик постов">
<?= htmlspecialchars($user['posts_count']) ?> поста</button><br><br>

<?php foreach ($userPosts as $post): ?>
        <img class="profile_gallery" src="<?= htmlspecialchars($post['image']) ?>" alt="Пост">
<?php endforeach; ?>
