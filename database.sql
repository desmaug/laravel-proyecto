CREATE DATABASE IF NOT EXISTS laravel_master;

USE laravel_master;

CREATE TABLE  IF NOT EXISTS users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    role VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100),
    nick VARCHAR(100),
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    remember_token VARCHAR(255) NOT NULL
);

insert into users values (null, 'user', 'Jose', 'Enriquez', 'desmaug', 'joseenriquez@gmail.com', null, CURTIME(), CURTIME(), null );
insert into users values (null, 'user', 'Juan', 'Romo', 'desmaug2', 'juan@gmail.com', null, CURTIME(), CURTIME(), '12345');
insert into users values (null, 'user', 'Pedro', 'Lopez', 'desmaug3', 'pedro@gmail.com', null, CURTIME(), CURTIME(), '12345');

CREATE TABLE IF NOT EXISTS images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

insert into images values (null, '1', 'test.jpg', 'descripcion 1', CURTIME(), CURTIME());


CREATE TABLE IF NOT EXISTS comments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    image_id INT NOT NULL,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (image_id) REFERENCES images(id)
);

insert into comments values (null, 1, 1, 'Buena foto 1', CURTIME(), CURTIME()),
(null, 2, 3, 'Buena foto 2', CURTIME(), CURTIME()),
(null, 3, 4, 'Buena foto 3', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS likes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    image_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (image_id) REFERENCES images(id)
);

insert into likes values (null, 1, 1, CURTIME(), CURTIME()),
(null, 2, 2, CURTIME(), CURTIME()),
(null, 1, 4, CURTIME(), CURTIME()),
(null, 3, 3, CURTIME(), CURTIME());