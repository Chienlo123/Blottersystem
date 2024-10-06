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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(4, '5b85847bbe794', '5b85857d00f34', 'What is the output of print str * 2 if str = \'Hello World!\'?', 4, 1),
(5, '5b85847bbe794', '5b85857d333f0', 'What is the output of print tuple[1:3] if tuple = ( \'abcd\', 786 , 2.23, \'john\', 70.2 )?', 4, 2),
(6, '5b85847bbe794', '5b85857d59559', 'Which of the following function convert a string to a long in python?', 4, 3),
(7, '5b85847bbe794', '5b85857d917d6', 'Which of the following function convert an integer to an unicode character in python?', 4, 4),
(8, '5b85847bbe794', '5b85857db810f', 'Which of the following function returns a random item from a list, tuple, or string?', 4, 5),
(9, '64577bfb4741c', '64577c168c844', '1+1', 4, 1),
(10, '64577bfb4741c', '64577c1697377', '2+2', 4, 2),
(11, '645829db1f10a', '64582a142e388', '1-1', 4, 1),
(12, '645829db1f10a', '64582a1434fcd', '3+4', 4, 2),
(13, '645829db1f10a', '64582a143f33d', '3+6', 4, 3),
(14, '64582af7d6f3b', '64582b1150e72', '1+2', 4, 1),
(15, '64582af7d6f3b', '64582b1159364', '3-3', 4, 2),
(16, '6458434346b9c', '64584351a0c57', '1+1', 4, 1),
(17, '6458434346b9c', '64584351aaae0', 'frsa', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
