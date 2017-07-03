-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 01:19 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `phoneNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Boamponsem', 'Nana Ken', 'bo@gmail.com', 'Ghana', '1234567890', 'p.o box 344,admum', 'Christ Temple', 'Lactose intolerant', 'Mrs. Adoma Boamah', '0987654321', 'boa@gmail.com'),
(2, 'Moana', 'Kingsley', 'kh@gmail.com', 'Uganda', '1234567890', 'P.box 5332,Adum', 'Christ Temple', 'lactose', 'mr kolom', '0987654321', 'adv@gmail.com'),
(3, 'moana', 'Kingsley', 'adv@gmail.com', 'Afghanistan', '1234567890', 'p.o box 344,admum', 'Christ Temple', 'L', 'Mrs. Adoma Boamah', '1234567890', 'asd@yahoo.com'),
(4, 'asd', 'asd', 'asd@gmail.com', 'Afghanistan', '1234567890', 'asd', 'Peniel Temple', 'asd', 'asd', '1234567890', 'asd@yahoo.com'),
(8, 'Boamponsem', 'Nana Ken', 'boamponsemken@yahoo.com', 'Ghana', '0244591388', 'p.o box 344,admum', 'Holy Ghost Temple', 'Lactose intolerant', 'Mrs. Adoma Boamah', '0542721492', 'adom@gmail.com'),
(9, 'DAYIE', 'RICHARD', 'dayiek@gmail.com', 'Ghana', '0503888540', 'P. O. Box AF 1492, Adenta', '', '', 'Richard Fayie', '0243957701', ''),
(10, 'Boamponsem', 'Kelvin', 'bo@gmail.com', 'Ghana', '0262591388', 'p.o box 344,admum', 'other', 'LACTOSE', 'Mrs. boamponsem Esther', '233591388', 'bo@gmail.com'),
(11, 'asdasd', 'asd ads', 'aa@A.com', 'Bahrain', '1234567890', 'p.o box 5332,adum', 'asd', 'asd', 'asc afvca', '1234567890', 'adom@gmail.com'),
(12, 'asddftghythyth', 'asd', 'asdsd@gmail.com', 'Azerbaijan', '1234567890', 'p.o box 344,admum', '', 'asd', 'sdasa', '1234567890', 'adom@gmail.com'),
(13, 'asdkvb', 'scvs', 'asd@gmail.com', 'Bahamas', '1234567890', 'p.o box 344,admum', 'other', 'asd', 'sdgtny', '1234567890', 'adom@gmail.com'),
(14, 'sdvrgtbtb', 'adfvfd', 'asd@gmail.com', 'American Samoa', '1234567890', 'p.o box 344,admum', 'Other Assembly', 'ffgvgds', 'efvervg', '1234567890', 'gbtryjnu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
