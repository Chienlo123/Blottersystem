-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 12:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(13, '5b85857d00f34', ' Hello World!Hello World!', '5b85857d0ab77'),
(14, '5b85857d00f34', ' Hello World! * 2', '5b85857d0af5f'),
(15, '5b85857d00f34', 'Hello World!', '5b85857d0b347'),
(16, '5b85857d00f34', 'None of the above.', '5b85857d0b72f'),
(17, '5b85857d333f0', '( \'abcd\', 786 , 2.23, \'john\', 70.2 )', '5b85857d389e2'),
(18, '5b85857d333f0', 'abcd', '5b85857d38dca'),
(19, '5b85857d333f0', '(786, 2.23)', '5b85857d391b2'),
(20, '5b85857d333f0', 'None of the above.', '5b85857d3959a'),
(21, '5b85857d59559', 'int(x [,base])', '5b85857d69b15'),
(22, '5b85857d59559', 'long(x [,base] )', '5b85857d69efd'),
(23, '5b85857d59559', 'float(x)', '5b85857d6a2e5'),
(24, '5b85857d59559', 'str(x)', '5b85857d6a6cd'),
(25, '5b85857d917d6', 'unichr(x)', '5b85857d97980'),
(26, '5b85857d917d6', 'ord(x)', '5b85857d97d68'),
(27, '5b85857d917d6', 'hex(x)', '5b85857d98150'),
(28, '5b85857d917d6', 'oct(x)', '5b85857d98538'),
(29, '5b85857db810f', 'choice(seq)', '5b85857dbd701'),
(30, '5b85857db810f', 'randrange ([start,] stop [,step])', '5b85857dbdae9'),
(31, '5b85857db810f', 'random()', '5b85857dbded1'),
(32, '5b85857db810f', 'seed([x])', '5b85857dbe2b9'),
(33, '64577c168c844', '1', '64577c168dcaa'),
(34, '64577c168c844', '2', '64577c168dcb1'),
(35, '64577c168c844', '3', '64577c168dcb2'),
(36, '64577c168c844', '4', '64577c168dcb3'),
(37, '64577c1697377', '1', '64577c1699ba0'),
(38, '64577c1697377', '2', '64577c1699baa'),
(39, '64577c1697377', '3', '64577c1699bab'),
(40, '64577c1697377', '4', '64577c1699bac'),
(41, '64582a142e388', '1', '64582a142fcad'),
(42, '64582a142e388', '2', '64582a142fcb5'),
(43, '64582a142e388', '3', '64582a142fcb6'),
(44, '64582a142e388', '0', '64582a142fcb7'),
(45, '64582a1434fcd', '4', '64582a14361aa'),
(46, '64582a1434fcd', '7', '64582a14361b2'),
(47, '64582a1434fcd', '76', '64582a14361b3'),
(48, '64582a1434fcd', '4', '64582a14361b4'),
(49, '64582a143f33d', '9', '64582a144138a'),
(50, '64582a143f33d', '2', '64582a1441391'),
(51, '64582a143f33d', '4', '64582a1441392'),
(52, '64582a143f33d', '2', '64582a1441393'),
(53, '64582b1150e72', '2', '64582b1151e87'),
(54, '64582b1150e72', '3', '64582b1151e8f'),
(55, '64582b1150e72', '4', '64582b1151e90'),
(56, '64582b1150e72', '5', '64582b1151e91'),
(57, '64582b1159364', '1', '64582b115aabd'),
(58, '64582b1159364', '2', '64582b115aac4'),
(59, '64582b1159364', '3', '64582b115aac5'),
(60, '64582b1159364', '0', '64582b115aac7'),
(61, '64584351a0c57', '1', '64584351a2398'),
(62, '64584351a0c57', '2', '64584351a239f'),
(63, '64584351a0c57', '2', '64584351a23a0'),
(64, '64584351a0c57', '1', '64584351a23a1'),
(65, '64584351aaae0', '12', '64584351ad39c'),
(66, '64584351aaae0', '3', '64584351ad3a5'),
(67, '64584351aaae0', '4', '64584351ad3a6'),
(68, '64584351aaae0', '4', '64584351ad3a7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
