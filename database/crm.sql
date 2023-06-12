-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 07:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `create_lead` (IN `fname` VARCHAR(250), IN `lname` VARCHAR(250), IN `company` VARCHAR(250), IN `job_title` VARCHAR(250), IN `phone` VARCHAR(250), IN `email` VARCHAR(250), IN `comments` TEXT)   INSERT INTO `lead` (`id`, `first_name`, `last_name`, `company`, `job_title`, `comment`, `phone_number`, `email`)
VALUES (NULL,fname ,lname ,company ,job_title ,comments ,phone ,email)$$

CREATE DEFINER=`` PROCEDURE `get_all_lead` ()   SELECT * FROM lead$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login_admin` (IN `email` VARCHAR(255), IN `passwd` VARBINARY(255))   SELECT * FROM admin 
where admin.email = email 
and admin.passwd = passwd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login_agent` (IN `email` VARCHAR(255), IN `pass` VARBINARY(255))   SELECT * FROM agent
WHERE agent.email=email and agent.passwd=pass$$

CREATE DEFINER=`` PROCEDURE `search_lead` (IN `svalue` INT)   SELECT * 
FROM lead
WHERE lead.first_name LIKE CONCAT('%',svalue,'%') OR
		lead.last_name LIKE CONCAT('%',svalue,'%') OR
        lead.company LIKE CONCAT('%',svalue,'%') OR
        lead.job_title LIKE CONCAT('%',svalue,'%') OR
        lead.comment LIKE CONCAT('%',svalue,'%') OR
        lead.phone_number LIKE CONCAT('%',svalue,'%') OR
        lead.email LIKE CONCAT('%',svalue,'%')$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `passwd`) VALUES
(1, 'adminyisak@gmail.com', 0x7465737470617373);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `passwd` varbinary(255) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `email`, `first_name`, `last_name`, `passwd`, `address`, `status`) VALUES
(2, 'agentpaul@gmail.com', 'Paul', 'Abraham', 0x7465737470617373, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company` text NOT NULL,
  `job_title` text NOT NULL,
  `comment` text NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `first_name`, `last_name`, `company`, `job_title`, `comment`, `phone_number`, `email`) VALUES
(2, 'Israel', 'Dereje', 'Google', 'Front-end Dev', 'Some comment here', '+251932900261', 'Israel@gmail.com'),
(6, 'Yisak', 'Abraham', 'Jimla', 'sdc', '45', '+251932900261', 'yisakabrahamk@gmail.com'),
(7, 'Yisak', 'Abraham', 'Jimla', 'testtststts', 'testststst', '+251932900261', 'yisakabrahamk@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
