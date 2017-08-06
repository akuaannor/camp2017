-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 02:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `phone_num` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `church` varchar(30) NOT NULL,
  `assembly` varchar(30) NOT NULL,
  `health` varchar(100) NOT NULL,
  `diet` varchar(100) NOT NULL,
  `fam_name` varchar(30) NOT NULL,
  `fam_num` varchar(10) NOT NULL,
  `fam_email` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `paid` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campers`
--

INSERT INTO `campers` (`id`, `surname`, `firstname`, `othername`, `dob`, `phone_num`, `email`, `sex`, `Address`, `nationality`, `church`, `assembly`, `health`, `diet`, `fam_name`, `fam_num`, `fam_email`, `date`, `submitted`, `paid`, `image`) VALUES
(1, 'Baah', 'Festus', 'kojo', '1993-12-03', '200123456', 'kojo@gmail.com', 'male', 'accra', 'ghanaian', 'icgc', 'joy temple', 'none sorry', 'none sorry', 'Mr. Kwesi Baah', '501234567', 'baah@gmail.com', '2017-07-02 09:08:16', '0000-00-00 00:00:00', '0000-00-00', ''),
(2, 'Awuah', 'Jane', 'Nhyirah', '1994-03-31', '233', 'jawuah@gmail.com', 'female', 'kumasi', 'ghanaian', '', 'seekers temple', 'lol', 'gotcha', 'Mrs Jane Y. Awuah', '244572391', 'jy@gmail.com', '2017-07-02 21:49:46', '0000-00-00 00:00:00', '0000-00-00', ''),
(3, 'ed', 'ed', 'ed', '1999-05-05', '0901234567', 'ed@gmail.com', 'male', 'Adenta', 'ghanaian', 'icgc', 'holy ghost temple', 'sorry ed is fit', 'lol i eat everything', 'Mr Ed', '905343729', 'mred@gmail.com', '2017-07-08 19:12:59', '2017-07-08 19:12:59', '0000-00-00', ''),
(4, 'Boamponsem', 'Kenny', 'Nana', '0000-00-00', '1234567890', 'bo@gmail.com', '', 'p.o box 344,admum', 'Ghana', '', 'Holy Ghost Temple', 'malaria', '', 'Mrs. Adom', '1234567890', '', '2017-07-16 00:27:49', '2017-07-16 00:27:49', '0000-00-00', ''),
(5, 'Joshua', 'Laryea', 'Ben', '0000-00-00', '1234567890', 'josh@gmail.com', '', 'p o box 5332,adum', 'Ghana', '', 'Holy Ghost Temple', 'mo', '', 'Mrs. Adoms', '1234567890', '', '2017-07-16 00:51:04', '2017-07-16 00:51:04', '0000-00-00', ''),
(6, 'Pastor', 'Charles', 'Easy', '0000-00-00', '1234567890', 'pas@gmail.com', '', 'p.o box 344,admum', 'Gabon', 'mosesre', '', 'asd', '', 'Mrs. Adom', '1234567890', '', '2017-07-16 01:32:08', '2017-07-16 01:32:08', '0000-00-00', ''),
(7, 'Boaz', 'Ernest', 'Nana', '0000-00-00', '1234567890', 'asSd@gmail.com', '', 'p.o box 344,admum', 'Ghana', 'FRBC', '', '', '', 'Mrs. Adom AS', '', '', '2017-07-16 01:44:51', '2017-07-16 01:44:51', '0000-00-00', ''),
(8, 'as', 'as', 'as', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Bangladesh', 'as', '', '', '', 'Mrs. Adom', '', '', '2017-07-16 01:53:29', '2017-07-16 01:53:29', '0000-00-00', ''),
(9, 'Pompolo', 'David', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', '', '', '', '', 'Mrs. Adom', '', '', '2017-07-16 01:56:27', '2017-07-16 01:56:27', '0000-00-00', ''),
(10, 'Jessica', 'Commey', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', '', '', '', '', 'Mrs. Adom', '', '', '2017-07-16 02:02:20', '2017-07-16 02:02:20', '0000-00-00', ''),
(11, 'Jessica', 'Commey', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', '', '', '', '', 'Mrs. Adom', '', '', '2017-07-16 02:02:56', '2017-07-16 02:02:56', '0000-00-00', ''),
(12, 'Adom', 'Enocg', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', '', '', '', '', 'Mrs. Adom e', '', '', '2017-07-16 02:03:54', '2017-07-16 02:03:54', '0000-00-00', ''),
(13, 'Adom', 'Enocg', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', '', '', '', '', 'Mrs. Adom e', '', '', '2017-07-16 02:05:40', '2017-07-16 02:05:40', '0000-00-00', ''),
(14, 'Adom', 'Enocg', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', '', '', '', '', 'Mrs. Adom e', '', '', '2017-07-16 02:06:05', '2017-07-16 02:06:05', '0000-00-00', ''),
(15, 'Adom', 'Enocg', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', '', '', '', '', 'Mrs. Adom e', '', '', '2017-07-16 02:06:20', '2017-07-16 02:06:20', '0000-00-00', ''),
(16, 'ymn', 't ', '', '0000-00-00', '1234567890', 'asd@gmail.com', '', '', 'Afghanistan', 'agbr', '', '', '', 'asdfcv', '', '', '2017-07-16 03:00:15', '2017-07-16 03:00:15', '0000-00-00', ''),
(17, 'Mrs', 'Comforfor', '', '0000-00-00', '1234567890', 'as@gmial.com', '', '', 'Afghanistan', 'asd', '', '', '', 'asdv', '', '', '2017-07-16 03:05:14', '2017-07-16 03:05:14', '0000-00-00', ''),
(18, 'Owusu', 'Bempah', 'Junior', '0000-00-00', '0542721489', 'bems@yahoo.com', '', 'P. O. Box AF 1492, Adenta', 'Wallis and Futuna', '', '', '', '', 'Mrs. Bemps', '', '', '2017-07-16 07:56:19', '2017-07-16 07:56:19', '0000-00-00', ''),
(19, 'Ernest', 'Dakura', '', '0000-00-00', '0234459395', 'ernesSt@gmail.com', '', 'p.o box 344,admum', 'Bahrain', 'assemblies of God', '', '', '', 'Mrs. Boamponsem', '', '', '2017-07-22 09:44:10', '2017-07-22 09:44:10', '0000-00-00', ''),
(20, 'Ernestto', 'Dakura', '', '0000-00-00', '0234459395', 'ernessSt@gmail.com', '', 'p.o box 344,admum', 'Bahrain', 'assemblies of God', '', '', '', 'Mrs. Boamponsem', '', '', '2017-07-22 09:44:37', '2017-07-22 09:44:37', '0000-00-00', ''),
(21, 'asdb eefdb', 'afvce', 'sd', '0000-00-00', '1234567890', 'sdsdff@gmail.com', '', '', 'Bahamas', 'sdfer', '', '', '', 'sdfsd', '', '', '2017-07-27 00:19:36', '2017-07-27 00:19:36', '0000-00-00', ''),
(22, 'asdgtrfhw2er3e3', 'erb', 'eb', '0000-00-00', '1234567890', 'we@gmail.com', '', 'ads', 'Afghanistan', 'adsfvw', '', '', '', 'afcver', '', '', '2017-07-27 15:56:28', '2017-07-27 15:56:28', '0000-00-00', ''),
(30, 'asdeb e we', 'asdebr', 'easce', '2017-08-04', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'asdb rt', '', '', '2017-08-04 15:20:20', '2017-08-04 15:20:20', '0000-00-00', ''),
(35, 'weg3wref', 'e3fewf', 'erg', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'wefwevt y', '', '', '2017-08-05 01:42:02', '2017-08-05 01:42:02', '0000-00-00', 'UHj_O6cn.jpg'),
(36, 'q3weqwe', 'eqwrq', 'qweqwe', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avwe', '', '', '2017-08-05 01:53:42', '2017-08-05 01:53:42', '0000-00-00', 'UHj_O6cn.jpg'),
(37, 'q3weqwertertert', 'eqwrq', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avwe', '', '', '2017-08-05 02:02:34', '2017-08-05 02:02:34', '0000-00-00', 'ahhh.png'),
(38, 'q3weqwertertert weqw', 'eqwrqwevwef', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:13:26', '2017-08-05 02:13:26', '0000-00-00', 'UHj_O6cn.jpg'),
(39, 'q3weqwertertert weqw', 'eqwrqwevwef', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:17:05', '2017-08-05 02:17:05', '0000-00-00', 'UHj_O6cn.jpg'),
(40, 'q3weqwertertert weqw', 'eqwrqwevwef', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:17:28', '2017-08-05 02:17:28', '0000-00-00', 'UHj_O6cn.jpg'),
(41, 'q3weqwertertert weqw', 'eqwrqwevwef', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:18:15', '2017-08-05 02:18:15', '0000-00-00', 'UHj_O6cn.jpg'),
(42, 'q3weqwertertert weqw', 'eqwrqwevwef', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:19:20', '2017-08-05 02:19:20', '0000-00-00', ''),
(43, 'q3weqwertertert weqw', 'eqwrqwevwef', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:19:25', '2017-08-05 02:19:25', '0000-00-00', ''),
(44, 'q3weqwertertert weqw', 'eqwrqwevwef', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:20:05', '2017-08-05 02:20:05', '0000-00-00', ''),
(45, 'q3weq2342342', 'eqwrqwwedqwq', 'qweqwe eger', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:21:18', '2017-08-05 02:21:18', '0000-00-00', ''),
(46, 'q3weq123213', 'eqwrqww13123', 'qweq123213', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'avweb3bv43', '', '', '2017-08-05 02:23:43', '2017-08-05 02:23:43', '0000-00-00', 'UHj_O6cn.jpg'),
(47, 'afweff', 'wefw', 'wv', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre', '', '', '2017-08-05 02:49:45', '2017-08-05 02:49:45', '0000-00-00', 'UHj_O6cn.jpg'),
(56, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 02:56:09', '2017-08-05 02:56:09', '0000-00-00', 'UHj_O6cn.jpg'),
(57, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 02:56:21', '2017-08-05 02:56:21', '0000-00-00', 'UHj_O6cn.jpg'),
(58, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 02:57:32', '2017-08-05 02:57:32', '0000-00-00', 'UHj_O6cn.jpg'),
(59, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 02:58:21', '2017-08-05 02:58:21', '0000-00-00', 'UHj_O6cn.jpg'),
(60, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 02:59:12', '2017-08-05 02:59:12', '0000-00-00', 'UHj_O6cn.jpg'),
(61, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 02:59:46', '2017-08-05 02:59:46', '0000-00-00', ''),
(62, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 02:59:55', '2017-08-05 02:59:55', '0000-00-00', ''),
(63, 'afweff123123 2343243', 'wefw123234wefwe', 'wv123234wefewf', '2017-01-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'berre123werewf', '', '', '2017-08-05 03:00:23', '2017-08-05 03:00:23', '0000-00-00', ''),
(64, 'kojo', 'asdikj', 'ajiioqjij', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'jnikja', '', '', '2017-08-05 12:24:23', '2017-08-05 12:24:23', '0000-00-00', ''),
(65, 'wqefwef wd2q21e21', 'wefvwes', 'wefqwed', '2017-12-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'erby57k8iul67t', '', '', '2017-08-05 13:22:51', '2017-08-05 13:22:51', '0000-00-00', 'me.PNG'),
(66, 'afqewf', 'qefvwe', 'fwef', '2017-08-05', '1234567890', 'asd@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'ertb tr', '', '', '2017-08-05 13:26:20', '2017-08-05 13:26:20', '0000-00-00', ''),
(67, 'wefrwee', 'wefvwwerb46h', '4fw3e', '2017-08-05', '1234567890', 'asc@gmail.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'hjtymk6uy8mnt', '', '', '2017-08-05 13:28:09', '2017-08-05 13:28:09', '0000-00-00', 'IMG-20140514-WA0001_001.jpg'),
(68, 'ewrgt4rhylkuiohyuhw', 'oknbiowhef', 'khoiwhog', '2017-04-05', '1234567890', 'e4rn56y7hnb@yahoo.com', 'female', '', 'Afghanistan', 'Holy Ghost Temple', 'Holy Ghost Temple', '', '', 'w4erhjop9oi8ukyg', '', '', '2017-08-05 13:58:04', '2017-08-05 13:58:04', '0000-00-00', '603935_596206277060798_922776172_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `camper_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `date_paid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`camper_id`, `amount`, `date_paid`, `user`) VALUES
(0, '10', '2017-07-08 05:02:54', ''),
(0, '10', '2017-07-08 05:04:21', ''),
(1, '10', '2017-07-08 05:07:10', ''),
(2, '15', '2017-07-08 05:07:43', ''),
(1, '20', '2017-07-08 05:49:10', ''),
(1, '10', '2017-07-08 07:37:12', 'test'),
(1, '5', '2017-07-08 07:40:39', 'try'),
(2, '10', '2017-07-08 18:22:39', 'officer'),
(3, '20', '2017-07-08 19:21:53', 'aa'),
(2, '75', '2017-07-15 05:49:29', 'officer'),
(1, '30', '2017-07-15 12:18:56', 'try');

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
  `phone_num` varchar(10) NOT NULL,
  `church` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `surname`, `firstname`, `email`, `phone_num`, `church`, `password`, `user_role`, `date`) VALUES
(1, 'gray', 'graham', 'joshua', 'joshuagraham473@gmail.com', '0209999999', 'Holy Ghost Temple', 'cda7a650c5856cf2f673', 'admin', '2017-07-08 16:49:16'),
(2, 'joe', 'Ansah', 'joe', 'ansahjoe@gmail.com', '0201234567', 'holy ghost temple', '8ff32489f92f33416694', 'camp officer', '2017-07-08 21:25:32'),
(3, 'try', 'try', 'try', 'try@gmail.com', '0233412345', 'hgt icgc', 'try', 'admin', '2017-07-08 21:25:21'),
(4, 'test', 'test', 'test', 'test@gmail.com', '0251234567', 'joy temple', 'test', 'committee member', '2017-07-08 19:09:17'),
(5, 'officer', 'officer', 'officer', 'officer@gmail.com', '0701234567', 'shammah temple', 'officer', 'camp officer', '2017-07-08 21:20:03'),
(6, 'prince', 'prince', 'prince', 'prince@gmail.com', '0203456789', 'salem temple', 'prince', 'camp officer', '2017-07-07 13:55:47'),
(7, 'kkk', 'kkk', 'kkk', 'kkk@gmail.com', '0557382244', 'prayer temple', 'kkk', 'committee member', '2017-07-07 16:20:58'),
(8, 'aa', 'aaa', 'aa', 'aa@gmail.com', '0902313122', 'holy ghost temple', 'aa', 'camp officer', '2017-07-08 21:25:44');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
