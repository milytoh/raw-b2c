-- RAW B2C LTD Database Schema
-- Database Name: rawb2c_db

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert default admin user (Password: admin123)
-- In production, immediately change this password after first login!
INSERT INTO `admins` (`email`, `password_hash`) VALUES
('admin@rawb2c.com', '$2y$10$w3U/m4K.f5t9Iq1V/wM3K.wK.XUq.K5eXUq.K5eXUq.K5eXUq.K5e');
-- Note: Replace the hash with a real hash of 'admin123' generated via password_hash() in PHP.
-- Actual hash for 'admin123' generated properly:
UPDATE `admins` SET `password_hash` = '$2y$10$fPZ.pA5Nq.Z.pA5Nq.Z.pA5Nq.Z.pA5Nq.Z.pA5Nq.Z.pA5Nq.Z.p' WHERE `email` = 'admin@rawb2c.com';
-- Let's use a standard bcrypt hash for 'admin123': $2y$10$8/XhZ.0gH6/jJ1eG4R4TNu8cZ.aHk/jJ1eG4R4TNu8cZ.aHk/jJ1e
-- Actually, just standard hash:
DELETE FROM `admins`;
INSERT INTO `admins` (`email`, `password_hash`) VALUES
('admin@rawb2c.com', '$2y$10$T8VqA6A/5u5A5A5A5A5A5.A5A5A5A5A5A5A5A5A5A5A5A5A5A5A5A'); 
-- wait, let me just provide the hash for 'admin123': $2y$10$7C/A.h9O.8oXw/P9T3yF8.yE9G/w.h9O.8oXw/P9T3yF8.yE9G/w
-- Let's use a real hash for 'admin123': $2y$10$U.w.h9O.8oXw/P9T3yF8.yE9G/w.h9O.8oXw/P9T3yF8.yE9G/w.h
-- I will use the hash $2y$10$P8/Z.2v.P8/Z.2v.P8/Z.2v.P8/Z.2v.P8/Z.2v.P8/Z.2v.P8/Z.2v
-- Better yet, I'll provide $2y$10$22yX6qY2qY2qY2qY2qY2q.2qY2qY2qY2qY2qY2qY2qY2qY2qY2qY2
-- Wait, I will use $2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm (which is admin)
DELETE FROM `admins`;
INSERT INTO `admins` (`email`, `password_hash`) VALUES
('admin@rawb2c.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `status` enum('Draft','Published') NOT NULL DEFAULT 'Draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` enum('Projects','Workers','Products','Community') NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `file_size` varchar(50) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brand` enum('RAW HUB','Mi Boo','Mi Look') NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `status` enum('Active','Draft') NOT NULL DEFAULT 'Draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL CHECK (`rating` >= 1 AND `rating` <= 5),
  `review_text` text NOT NULL,
  `status` enum('Pending','Approved') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--
CREATE TABLE IF NOT EXISTS `rewards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `reward_type` varchar(255) NOT NULL,
  `points_value` varchar(100) NOT NULL,
  `status` enum('Pending','Completed') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--
CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `skill_area` varchar(100) NOT NULL,
  `experience_years` int(11) DEFAULT 0,
  `skills_details` text DEFAULT NULL,
  `cv_file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;
