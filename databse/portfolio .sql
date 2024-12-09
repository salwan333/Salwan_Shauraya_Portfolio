-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2024 at 04:30 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table media
--

CREATE TABLE media (
  id int UNSIGNED NOT NULL,
  work_id int NOT NULL,
  img1 varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table media
--

INSERT INTO media (id, work_id, img1) VALUES
(1, 1, 'p1.jpg'),
(2, 2, 'p2.jpg'),
(3, 3, 'zima.png'),
(4, 4, 'p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table works
--

CREATE TABLE works (
  id int UNSIGNED NOT NULL,
  name varchar(1000) NOT NULL,
  description varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table works
--

INSERT INTO works (id, name, description) VALUES
(3, 'Zima', 'Case Study: Rebranding Zima\r\nHello! This is a project in which we were assigned to rebrand Zima, and it turned out to be an exciting creative journey. My partner, Divij Saddul, and I started by brainstorming ideas for a fresh visual identity that captures the spirit of the brand. We designed a new logo and created wireframes to map out our vision.\r\n\r\nUsing Cinema 4D, we crafted model cans and wrapped the packaging around them to give everything a modern, appealing look. To really bring our designs to life, we produced a dynamic 3D animation for promotional videos that highlights the new branding in an engaging way.\r\n\r\nOn top of that, we built a complete website using HTML, CSS, and JavaScript, ensuring it offers a smooth and enjoyable experience for users. This project not only sharpened our design and coding skills but also showed us how important it is to have a cohesive brand presence across different platforms. Overall, it was a fantastic opportunity to collaborate and bring someth'),
(1, 'Forza Ayurveda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Billy Beer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Bubble Beats', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table media
--
ALTER TABLE media
  ADD PRIMARY KEY (id);

--
-- Indexes for table works
--
ALTER TABLE works
  ADD PRIMARY KEY (id);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
