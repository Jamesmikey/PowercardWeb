CREATE TABLE site_settings(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NULL,
	tag_line VARCHAR(255) NULL,
	about TEXT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO site_settings (name, tag_line, about)
VALUES ('Powercard Group Company Ltd', 'Real for you not just for you', 'Established for providing id card services and laboratory apparatus, reagents and fine chemicals for schools and organizations/institutions in advanced technology and competitive business platform.');
