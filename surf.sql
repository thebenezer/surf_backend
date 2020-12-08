-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2020 at 06:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surf`
--

-- --------------------------------------------------------

--
-- Table structure for table `bucket_list`
--

CREATE TABLE `bucket_list` (
  `bid` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pid` int(6) NOT NULL,
  `est_cost` int(11) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `plan_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `pid` int(6) NOT NULL,
  `country` varchar(30) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `rating` int(3) NOT NULL DEFAULT 2,
  `description` longtext NOT NULL DEFAULT 'country',
  `lat` float NOT NULL,
  `lon` float NOT NULL,
  `small_pic` varchar(100) NOT NULL DEFAULT '../assets/placeimages/place',
  `pictures` text NOT NULL DEFAULT 'places.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`pid`, `country`, `category`, `rating`, `description`, `lat`, `lon`, `small_pic`, `pictures`) VALUES
(1, 'Australia', NULL, 2, '\"country\"', -25.27, 133.77, 'australia_small.jpg', 'places.jpg'),
(2, 'India', NULL, 2, '\"country\"', 20.6, 79, 'india_small.jpg', 'places.jpg'),
(3, 'UK', NULL, 2, '\"country\"', 55.57, -3.43, 'uk_small.jpg', 'places.jpg'),
(4, 'Spain', NULL, 2, '\"country\"', 40.46, -3.75, 'spain_small.jpg', 'places.jpg'),
(5, 'Italy', NULL, 2, '\"country\"', 41.87, 12.56, 'italy_small.jpg', 'places.jpg'),
(6, 'Japan', NULL, 2, '\"country\"', 36.2, 138.25, 'japan_small.jpg', 'places.jpg'),
(7, 'USA', NULL, 2, '\"country\"', 37.09, -95.71, 'usa_small.jpg', 'places.jpg'),
(8, 'Mexico', NULL, 2, '\"country\"', 23.63, -102.55, 'mexico_small.jpg', 'places.jpg'),
(9, 'France', NULL, 2, '\"country\"', 46.22, 2.21, 'france_small.jpg', 'places.jpg'),
(10, 'Turkey', NULL, 2, '\"country\"', 38.96, 35.24, 'turkey_small.jpg', 'places.jpg'),
(11, 'Thailand', NULL, 2, '\"country\"', 15.87, 101, 'thailand_small.jpg', 'places.jpg'),
(12, 'China', NULL, 2, '\"country\"', 35.86, 104.19, 'china_small.jpg', 'places.jpg'),
(13, 'Germany', NULL, 2, '\"country\"', 51.16, 10.45, 'germany_small.jpg', 'places.jpg'),
(14, 'South Africa', NULL, 2, '\"country\"', -30.56, 22.93, 'sa_small.jpg', 'places.jpg'),
(15, 'Brazil', NULL, 2, '\"country\"', -14.23, -51.92, 'brazil_small.jpg', 'places.jpg'),
(16, 'New Zeland', NULL, 2, '\"country\"', -40.9, 174.88, 'newzeland_small.jpg', 'places.jpg'),
(17, 'Indonesia', NULL, 2, 'Indonesia', -0.79, 113.92, 'indonesia_small.jpg', 'places.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `travelled`
--

CREATE TABLE `travelled` (
  `tripid` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pid` int(6) NOT NULL,
  `trip_date` date DEFAULT NULL,
  `duration` int(4) DEFAULT 1,
  `cost` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `pwd`) VALUES
('ben', 'ben', 'ben@mail.com', '$2y$10$YNV7MmDdOF8oWKhw3Nj.xen/0mmqhH/fvf89ua3VzVeH5ZqM2Wavq'),
('ebe', 'ebe', 'ebe@gmail.com', '$2y$10$BXrhgVmqEaL5WyecCL74J.5ewT8X43KE18ZuREgAOylMnGdraMqZe');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `uid` varchar(20) DEFAULT NULL,
  `join_date` date DEFAULT current_timestamp(),
  `no_places_travelled` int(3) DEFAULT 0,
  `address` varchar(50) NOT NULL,
  `phno` varchar(13) NOT NULL,
  `age` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bucket_list`
--
ALTER TABLE `bucket_list`
  ADD PRIMARY KEY (`bid`,`uid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `travelled`
--
ALTER TABLE `travelled`
  ADD PRIMARY KEY (`tripid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD KEY `uid` (`uid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bucket_list`
--
ALTER TABLE `bucket_list`
  ADD CONSTRAINT `bucket_list_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `bucket_list_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `destinations` (`pid`);

--
-- Constraints for table `travelled`
--
ALTER TABLE `travelled`
  ADD CONSTRAINT `travelled_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `travelled_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `destinations` (`pid`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
