-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 11:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icgc_hgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Othernames` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Phonenumber` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Assembly` varchar(20) NOT NULL,
  `Allergies` varchar(100) NOT NULL,
  `ParentsFullName` varchar(50) NOT NULL,
  `ParentsTelephone` varchar(50) NOT NULL,
  `Parentsemail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `Surname`, `Othernames`, `Email`, `Nationality`, `Phonenumber`, `address`, `Assembly`, `Allergies`, `ParentsFullName`, `ParentsTelephone`, `Parentsemail`) VALUES
(1, 'Simpson', 'Jessica', 'jess@gmail.com', 'Albania', '0542721492', 'adenta-madina', 'Kumasi', 'lactose intorelant', 'Mrs. Adoma Boamah', '0244581277', 'adom@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
