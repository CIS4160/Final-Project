-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2020 at 01:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `netflix_credit_registar`
--

CREATE TABLE `netflix_credit_registar` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `zip_code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `card_number` varchar(255) CHARACTER SET latin1 NOT NULL,
  `expire_date` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cvv` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `netflix_credit_registar`
--

INSERT INTO `netflix_credit_registar` (`id`, `first_name`, `last_name`, `email`, `password`, `zip_code`, `card_number`, `expire_date`, `cvv`) VALUES
(1, 'test1', 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', '12345678910', '11/12', '123'),
(2, 't1', 't2', 'email.com', '098f6bcd4621d373cade4e832627b4f6', '11111', '111111111111111111', '11/22', '111'),
(3, 'sfesf', 'sfesfs', 'sfesfs@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '11111', '11111111111', '11/22', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `netflix_credit_registar`
--
ALTER TABLE `netflix_credit_registar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `netflix_credit_registar`
--
ALTER TABLE `netflix_credit_registar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
