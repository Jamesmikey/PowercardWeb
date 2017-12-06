CREATE TABLE services(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	description TEXT NOT NULL,
	image VARCHAR(255) NOT NULL,
	published BOOLEAN DEFAULT false,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO services (title, description, image) VALUES ('Photo Entry', 'We directly provide the photo entry services and system to schools for self on hand operations for real time accomplishment and output accuracy and quality and cost saving.', 'http://via.placeholder.com/600x300');
INSERT INTO services (title, description, image) VALUES ('ID Card Print and Design', 'High quality cards with medium and high security level upon clients requests for determining organizations/institution strength, ensuring cards long life span and makes cards unique with unique attractiveness Supply of all id cards printer consumables (ribbons, blank cards, contactless, rf-id and chip cards).', 'http://via.placeholder.com/600x300');
INSERT INTO services (title, description, image) VALUES ('Laboratory Chemical Supply', 'At low and competitive friendly price, you get quality and durable laboratory apparatus, devices, pure fine reagents and chemicals for accurate scientific practical experiments.', 'http://via.placeholder.com/600x300');
