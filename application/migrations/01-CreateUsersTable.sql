CREATE TABLE users (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	phone VARCHAR(255) NULL UNIQUE,
	email VARCHAR(255) NOT NULL UNIQUE,
	position VARCHAR(255) NULL,
	password VARCHAR(255),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (first_name, last_name, email, position, password) VALUES ('Jonathan', 'Robert', 'jonathan@powercard.co.tz', 'Managing Director', '1234');
INSERT INTO users (first_name, last_name, email, position, password) VALUES ('Frank Michael', 'Mshana', 'frank@powercard.co.tz', 'Secretary And Spokesman', '1234');
INSERT INTO users (first_name, last_name, email, position, password) VALUES ('James', 'Michael', 'james@powercard.co.tz', 'ICT Director And Consultant', '1234');
INSERT INTO users (first_name, last_name, email, position, password) VALUES ('Kelvin', 'Bina', 'kelvin@powercard.co.tz', 'Financial Management Advisor', '1234');
INSERT INTO users (first_name, last_name, email, position, password) VALUES ('Godfrey', 'Kimambo', 'godfrey@powercard.co.tz', 'Body Member,Marketing And Logistic Manager', '1234');
INSERT INTO users (first_name, last_name, email, position, password) VALUES ('Vivian', 'Kimambo', 'vivian@powercard.co.tz', 'Body Member', '1234');
INSERT INTO users (first_name, last_name, email, position, password) VALUES ('Samwel', 'Chacha', 'samwel@powercard.co.tz', 'Body Member', '1234');
INSERT INTO users (first_name, last_name, email, position, password) VALUES ('Mwita Joseph', 'Bina', 'mwita@powercard.co.tz', 'Body Member', '1234');
