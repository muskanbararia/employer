-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2017 at 09:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `region` varchar(60) NOT NULL,
  `title` text NOT NULL,
  `location` text NOT NULL,
  `logo` text NOT NULL,
  `category` text NOT NULL,
  `details` text NOT NULL,
  `skills` text NOT NULL,
  `experience` text NOT NULL,
  `approval` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`, `email`, `region`, `title`, `location`, `logo`, `category`, `details`, `skills`, `experience`, `approval`) VALUES
(1, '', '', '', '', 'BBSR', 'dummy', '', '', '', '', 0),
(2, '', '', '', '', 'BBSR', 'dummy', '', '', '', '', 0),
(3, '', '', '', '', 'BBSR', 'dummy', '', '', '', '', 0),
(4, 'Jahangir Ali Khan', 'jahangirali786@gmail.com', '', 'La La Land - Hindi ', 'somewhere', 'dummy', '52', 'asa', '', '11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
