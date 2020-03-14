-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 10:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdumb`
--
CREATE DATABASE IF NOT EXISTS `dbdumb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbdumb`;

-- --------------------------------------------------------

--
-- Table structure for table `comments_tb`
--

CREATE TABLE `comments_tb` (
  `comments_id` varchar(5) NOT NULL,
  `comment` char(255) NOT NULL,
  `post_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_tb`
--

INSERT INTO `comments_tb` (`comments_id`, `comment`, `post_id`) VALUES
('V001', 'Jenis Binatang?', 'P001'),
('V002', 'Jumlah Binatang?', 'P001'),
('V003', 'Kebun Binatang Mana?', 'P001');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tb`
--

CREATE TABLE `posts_tb` (
  `posts_id` varchar(5) NOT NULL,
  `title` char(50) NOT NULL,
  `content` char(255) NOT NULL,
  `createdBy` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_tb`
--

INSERT INTO `posts_tb` (`posts_id`, `title`, `content`, `createdBy`) VALUES
('P001', 'Artikel Kebun Binatang 	DumbWays', 'Liputan6.com, Palu - Pemerintah Kota Palu Sulawesi Tengah merencanakan membangun kebun binatang mini di hutan kota sebagai habitat buatan bagi flora dan fauna endemik Sulawesi.', 'U001');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` varchar(5) NOT NULL,
  `name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `name`) VALUES
('U001', 'Anto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments_tb`
--
ALTER TABLE `comments_tb`
  ADD PRIMARY KEY (`comments_id`),
  ADD KEY `post_Id` (`post_id`);

--
-- Indexes for table `posts_tb`
--
ALTER TABLE `posts_tb`
  ADD PRIMARY KEY (`posts_id`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments_tb`
--
ALTER TABLE `comments_tb`
  ADD CONSTRAINT `comments_tb_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts_tb` (`posts_id`);

--
-- Constraints for table `posts_tb`
--
ALTER TABLE `posts_tb`
  ADD CONSTRAINT `posts_tb_ibfk_1` FOREIGN KEY (`createdBy`) REFERENCES `user_tb` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
