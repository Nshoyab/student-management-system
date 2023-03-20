-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admossion`
--

CREATE TABLE `admossion` (
  `id` int(11) NOT NULL,
  `Name` varchar(222) DEFAULT NULL,
  `Email` varchar(222) DEFAULT NULL,
  `Phone` int(20) DEFAULT NULL,
  `Message` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admossion`
--

INSERT INTO `admossion` (`id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, ''),
(2, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, 'i want to get admission '),
(3, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, 'i want to get admission '),
(4, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, ''),
(5, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, ''),
(6, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, ''),
(7, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, ''),
(8, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, ''),
(9, 'shoyab', 'shoyabnadaf@gmail.com', 1234567864, 'ssssss');

-- --------------------------------------------------------

--
-- Table structure for table `cource`
--

CREATE TABLE `cource` (
  `id` int(112) NOT NULL,
  `name` varchar(122) NOT NULL,
  `image` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cource`
--

INSERT INTO `cource` (`id`, `name`, `image`) VALUES
(1, 'marketing', 'marketing.png'),
(2, 'web developer', 'web.jpg'),
(4, 'market', 'marketing.png'),
(5, 'graphics', 'graphic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(33) NOT NULL,
  `name` varchar(39) DEFAULT NULL,
  `dicription` varchar(38) DEFAULT NULL,
  `image` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `dicription`, `image`) VALUES
(4, 'shoyab', 'this is a college teacher', 'teacher_1.jpg'),
(11, 'teacher', 'this is a college teacher', 'teacher3.jpg'),
(12, 'himani', ' Vegetable soup with gluten-free bread', 'PHOTO_S.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `password`) VALUES
(2, 'my name is ', 123456677, 'shoyabnadaf111@gmail.com', 1234),
(9, 'sameernadaf', 0, 'sameernadaf@1113gmail.com', 1111),
(12, 'nadaf', 2424252, 'sameernadaf@1233gmail.com', 123423);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admossion`
--
ALTER TABLE `admossion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cource`
--
ALTER TABLE `cource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `admossion`
--
ALTER TABLE `admossion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cource`
--
ALTER TABLE `cource`
  MODIFY `id` int(112) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
