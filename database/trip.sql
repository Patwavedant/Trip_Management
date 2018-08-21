-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 03:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `e_id` int(5) NOT NULL,
  `e_name` varchar(25) NOT NULL,
  `e_amount` double NOT NULL,
  `e_c_id` int(5) NOT NULL,
  `e_cname` varchar(15) NOT NULL,
  `e_uid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_category`
--

CREATE TABLE `e_category` (
  `e_c_id` int(5) NOT NULL,
  `e_c_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_category`
--

INSERT INTO `e_category` (`e_c_id`, `e_c_name`) VALUES
(1, 'Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `traveler`
--

CREATE TABLE `traveler` (
  `tr_id` int(5) NOT NULL,
  `t_id` int(5) NOT NULL,
  `U_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveler`
--

INSERT INTO `traveler` (`tr_id`, `t_id`, `U_id`) VALUES
(23, 11, 1),
(24, 11, 2),
(25, 11, 3),
(26, 11, 4),
(27, 12, 1),
(28, 12, 2),
(29, 12, 3),
(30, 12, 4),
(31, 13, 1),
(32, 13, 2),
(33, 13, 3),
(34, 13, 4),
(35, 14, 1),
(36, 14, 3),
(37, 14, 4),
(38, 15, 1),
(39, 15, 2),
(40, 15, 3),
(41, 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `t_id` int(5) NOT NULL,
  `t_name` varchar(25) NOT NULL,
  `t_sdate` date NOT NULL,
  `t_edate` date NOT NULL,
  `t_image` blob NOT NULL,
  `t_isActive` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`t_id`, `t_name`, `t_sdate`, `t_edate`, `t_image`, `t_isActive`) VALUES
(11, 'Hathani Mata', '2018-08-06', '2018-08-09', 0x494d475f32303138303732395f3136303334322e6a7067, 'on'),
(12, 'Rasalpur', '2018-08-09', '2018-08-10', 0x494d475f32303138303732395f3136303334322e6a7067, 'on'),
(13, 'Pavagadh', '2018-08-10', '2018-08-11', 0x494d475f32303138303732395f3136303730322e6a7067, 'on'),
(14, 'Shirdi', '2018-08-11', '2018-08-12', 0x366c6e334553522e6a7067, 'on'),
(15, 'Ajwa', '2018-08-11', '2018-08-12', 0x302e6a7067, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_id` int(5) NOT NULL,
  `U_name` varchar(45) NOT NULL,
  `U_email` varchar(45) NOT NULL,
  `U_mobile` bigint(12) NOT NULL,
  `U_password` varchar(45) NOT NULL,
  `U_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `U_name`, `U_email`, `U_mobile`, `U_password`, `U_active`) VALUES
(1, 'Vedant K Patwa', 'patwavedant@gmail.com', 7069584513, 'qwert123', 1),
(2, 'Sanjay S Prasram', 'sanjayprasram2@gmail.com', 9998774044, 'sanjay123', 1),
(3, 'Anashwar', 'anna@gmail.com', 1234567890, 'qwerty1234', 1),
(4, 'Aziz', 'aziz@gmail.com', 123456789, 'qwe123', 1),
(5, 'Vedant Shah', 'shahvedant@gmail.com', 7069584518, '123456789', 1),
(6, '', '', 1234567890, '', 1),
(7, '', '', 0, '', 1),
(8, '', '', 0, '', 1),
(9, '', '', 0, '', 1),
(10, '', '', 0, '', 1),
(11, '', '', 0, '', 1),
(12, '', '', 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `e_category`
--
ALTER TABLE `e_category`
  ADD PRIMARY KEY (`e_c_id`);

--
-- Indexes for table `traveler`
--
ALTER TABLE `traveler`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `FK_userid` (`U_id`),
  ADD KEY `FK_tripid` (`t_id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_category`
--
ALTER TABLE `e_category`
  MODIFY `e_c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `traveler`
--
ALTER TABLE `traveler`
  MODIFY `tr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `t_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `traveler`
--
ALTER TABLE `traveler`
  ADD CONSTRAINT `FK_tripid` FOREIGN KEY (`t_id`) REFERENCES `trip` (`t_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_userid` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
