DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id int PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255) UNIQUE NOT NULL,
	password VARCHAR(255) NOT NULL,
	role VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password, role)
VALUES ('admin', MD5('rahasia'), 'admin');