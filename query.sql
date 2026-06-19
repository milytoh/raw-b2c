CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE workers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(255),
    phone VARCHAR(50),
    skill_area VARCHAR(100),
    experience_years INT DEFAULT 0,
    skills_details TEXT,
    cv_file_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    brand VARCHAR(100),
    image_path VARCHAR(255),
    status ENUM('Active','Draft') DEFAULT 'Draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    category VARCHAR(100),
    content LONGTEXT,
    image_path VARCHAR(255),
    status ENUM('Draft','Published') DEFAULT 'Draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100),
    title VARCHAR(255),
    image_path VARCHAR(255),
    file_size VARCHAR(50),
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255),
    email VARCHAR(255),
    rating INT,
    review_text TEXT,
    status ENUM('Pending','Approved') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE rewards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255),
    reward_type VARCHAR(255),
    points_value VARCHAR(100),
    status ENUM('Pending','Completed') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



ALTER TABLE products
ADD COLUMN description TEXT AFTER brand,
ADD COLUMN price DECIMAL(10,2) DEFAULT 0 AFTER description;

ALTER TABLE reviews
ADD COLUMN product_id INT AFTER id;

ALTER TABLE workers
ADD state VARCHAR(100) AFTER phone,
ADD local_government VARCHAR(100) AFTER state;



-- INSERT INTO admins (email, password_hash)
-- VALUES (
-- 'admin@rawb2c.com',
-- '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'
-- );

-- UPDATE admins
-- SET password_hash='$2y$10$dDZ0uBmInldLpghTvxVvXudsC9J4cgUXHKv7rxm5tKiOIni.qLVx6'
-- WHERE email='admin@rawb2c.com';



-- INSERT INTO workers(
-- first_name,
-- last_name,
-- email,
-- phone,
-- skill_area
-- )
-- VALUES(
-- 'John',
-- 'Doe',
-- 'john@example.com',
-- '08012345678',
-- 'Web Development'
-- );

-- INSERT INTO products(
-- name,
-- brand,
-- status
-- )
-- VALUES(
-- 'RAW Product',
-- 'RAW HUB',
-- 'Active'
-- );


-- INSERT INTO products(
-- name,
-- brand,
-- status
-- )
-- VALUES(
-- 'RAW Product',
-- 'RAW HUB',
-- 'Active'
-- );


-- INSERT INTO reviews(
-- customer_name,
-- email,
-- rating,
-- review_text,
-- status
-- )
-- VALUES(
-- 'Michael',
-- 'michael@example.com',
-- 5,
-- 'Great service',
-- 'Pending'
-- );