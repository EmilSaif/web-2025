CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    image VARCHAR(255),
    description TEXT,
    timestamp TIMESTAMP,
    likes INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
