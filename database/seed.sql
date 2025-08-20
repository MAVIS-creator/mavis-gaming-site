INSERT INTO users (username, email, password, role)
VALUES ('mavis_admin', 'admin@mavis.com', '$2y$10$SomethingEncryptedHash', 'admin');

INSERT INTO posts (title, slug, body, image)
VALUES ('Welcome to Mavis Gaming', 'welcome-mavis', 'Here we talk games, web and tech.', 'default.jpg');
