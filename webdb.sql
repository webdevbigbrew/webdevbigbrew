-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 06:19 AM
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
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datainsert`
--

CREATE TABLE `datainsert` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mnumber` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `create_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datainsert`
--

INSERT INTO `datainsert` (`id`, `name`, `email`, `mnumber`, `address`, `state`, `pincode`, `create_on`) VALUES
(1, 'dd', 'dd@aa', 111, 'dd', 'dd', '11', '2023-10-31 12:30:49'),
(4, 'dd', 'dd@aa', 111, 'dd', 'dd', '11', '2023-10-31 12:31:13'),
(5, 'dd', 'dd@aa', 111, 'dd', 'dd', '11', '2023-11-01 13:31:15'),
(6, 'aaa', 'dd@aa', 111, 'dd', 'dd', '11', '2023-11-01 15:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `rsvt`
--

CREATE TABLE `rsvt` (
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rsvt`
--

INSERT INTO `rsvt` (`name`, `email`, `date`, `time`) VALUES
('ken', 'dd@aa', '11/17/2023', '2:50 PM'),
('aaa', 'aaa@aaa', '11/11/2023', '11:10 A'),
('Scholar', 'dd@aa', '11/11/2023', '3:53 PM'),
('Scholar', 'ken@gmail.com', '11/17/2023', '3:45 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datainsert`
--
ALTER TABLE `datainsert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datainsert`
--
ALTER TABLE `datainsert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
