-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 12:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi_data`
--

CREATE TABLE `bmi_data` (
  `id` int(3) NOT NULL,
  `height` int(2) NOT NULL,
  `weight` int(2) NOT NULL,
  `bmi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmi_data`
--

INSERT INTO `bmi_data` (`id`, `height`, `weight`, `bmi`) VALUES
(1, 6, 70, 35);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(3) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `timeStamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `Fname`, `Lname`, `age`, `email`, `password`, `timeStamp`) VALUES
(1, 'akash', 'gupta', 25, '1@1gmail.com', '12345', '2020-09-23 20:12:50'),
(4, 'a', 'b', 12, '2@gmail.com', '121', '2020-09-23 20:53:10'),
(5, 'a', 'b', 12, '1@gmail.com', '123', '2020-09-23 20:54:05'),
(7, 'james', 'gun', 65, 'james@mcu.com', '123', '2020-09-23 22:24:10'),
(8, 'q', 'w', 45, 'q@gmail.com', '123', '2020-09-24 14:20:16'),
(9, 'abhishek', 'shah', 21, 'amitkumarshah499@gmail.com', '1234', '2020-09-24 21:41:57'),
(10, 'z', 'a', 15, 'z@gmail.com', '1', '2020-09-25 15:37:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi_data`
--
ALTER TABLE `bmi_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmi_data`
--
ALTER TABLE `bmi_data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
