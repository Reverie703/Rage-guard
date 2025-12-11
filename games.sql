CREATE TABLE games (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    size INT NOT NULL,
    release_date DATE NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image_path VARCHAR(255) NOT NULL
);

CREATE TABLE coming_soon (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    release_date DATE NOT NULL,
    image_path VARCHAR(255) NOT NULL
);

CREATE TABLE orders (
    id INT PRIMARY KEY,
    user_id INT NOT NULL,
    game_id INT NOT NULL,
    order_date TIMESTAMP NOT NULL,
    FOREIGN KEY (game_id) REFERENCES games(id)
);
CREATE TABLE users (
    id INT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);