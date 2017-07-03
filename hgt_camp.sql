-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 02:48 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hgt_camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `campers`
--

CREATE TABLE `campers` (
  `id` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `othername` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phone_num` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `church` varchar(30) NOT NULL,
  `assembly` varchar(30) NOT NULL,
  `health` varchar(100) NOT NULL,
  `diet` varchar(100) NOT NULL,
  `fam_name` varchar(30) NOT NULL,
  `fam_num` int(10) NOT NULL,
  `fam_email` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `paid` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campers`
--

INSERT INTO `campers` (`id`, `surname`, `firstname`, `othername`, `dob`, `phone_num`, `email`, `sex`, `city`, `nationality`, `church`, `assembly`, `health`, `diet`, `fam_name`, `fam_num`, `fam_email`, `date`, `submitted`, `paid`) VALUES
(1, 'Baah', 'Festus', 'kojo', '1993-12-03', 200123456, 'kojo@gmail.com', 'male', 'accra', 'ghanaian', 'icgc', 'joy temple', 'none sorry', 'none sorry', 'Mr. Kwesi Baah', 501234567, 'baah@gmail.com', '2017-07-02 09:08:16', '0000-00-00 00:00:00', '0000-00-00'),
(2, 'Awuah', 'Jane', 'Nhyirah', '1994-03-31', 233, 'jawuah@gmail.com', 'female', 'kumasi', 'ghanaian', '', 'seekers temple', 'lol', 'gotcha', 'Mrs Jane Y. Awuah', 244572391, 'jy@gmail.com', '2017-07-02 21:49:46', '0000-00-00 00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `camper_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `date_paid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_num` int(10) UNSIGNED NOT NULL,
  `church` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `surname`, `firstname`, `email`, `phone_num`, `church`, `password`, `user_role`, `date`) VALUES
(1, 'gray', 'graham', 'joshua', 'joshuagraham473@gmail.com', 203733557, 'holy ghost temple', 'cda7a650c5856cf2f673', 'admin', '2017-07-02 08:25:28'),
(2, 'joe', 'Ansah', 'joe', 'ansahjoe@gmail.com', 201234567, 'holy ghost temple', '8ff32489f92f33416694', 'camp officer', '2017-07-02 08:30:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campers`
--
ALTER TABLE `campers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campers`
--
ALTER TABLE `campers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
