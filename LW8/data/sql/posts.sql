INSERT INTO users (name) VALUES ('Владимир Рудольфович'), ('Антон Батон');

INSERT INTO posts (user_id, image, description, timestamp, likes) VALUES
(1, 'src/images/road.png', 'Так красиво сегодня на улице!...', FROM_UNIXTIME(1), 228),
(2, 'src/images/profile_6.png', 'Ну дела', FROM_UNIXTIME(1672545930), 115);