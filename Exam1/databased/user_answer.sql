-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 12:24 PM
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
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '58027e82e62e3', '58027e82f2412', '58027e82f2412', '5802790f793b1', 'sonudoo'),
(2, '58027e833dd54', '58027e8347514', '58027e8347514', '5802790f793b1', 'sonudoo'),
(3, '58027e8371483', '58027e838f19a', '58027e838f19a', '5802790f793b1', 'sonudoo'),
(4, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'pravin'),
(5, '5b85857d333f0', '5b85857d389e2', '5b85857d391b2', '5b85847bbe794', 'pravin'),
(6, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'pravin'),
(7, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'pravin'),
(8, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'pravin'),
(9, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'mugunth'),
(10, '5b85857d333f0', '5b85857d391b2', '5b85857d391b2', '5b85847bbe794', 'mugunth'),
(11, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'mugunth'),
(12, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'mugunth'),
(13, '5b85857db810f', '5b85857dbded1', '5b85857dbd701', '5b85847bbe794', 'mugunth'),
(14, '5b85857db810f', '5b85857dbded1', '5b85857dbd701', '5b85847bbe794', 'chienlo'),
(15, '64577c1697377', '64577c1699bac', '64577c1699bac', '64577bfb4741c', 'chienlo'),
(16, '64577c1697377', '64577c1699bac', '64577c1699bac', '64577bfb4741c', 'arren'),
(17, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'arren'),
(18, '64582a143f33d', '64582a144138a', '64582a144138a', '645829db1f10a', 'rex'),
(19, '64582a143f33d', '64582a144138a', '64582a144138a', '645829db1f10a', 'chienlo'),
(20, '64582b1159364', '64582b115aac7', '64582b115aac7', '64582af7d6f3b', 'chienlo'),
(21, '64582b1150e72', '64582b1151e8f', '64582b1151e8f', '64582af7d6f3b', 'rex'),
(22, '64582b1159364', '64582b115aac7', '64582b115aac7', '64582af7d6f3b', 'rex'),
(23, '64584351a0c57', '64584351a239f', '64584351a2398', '6458434346b9c', 'rex'),
(24, '64584351aaae0', '64584351ad3a7', '64584351ad3a7', '6458434346b9c', 'rex'),
(25, '64582a142e388', '64582a142fcb7', '64582a142fcb7', '645829db1f10a', 'rex'),
(26, '64582a1434fcd', '64582a14361b2', '64582a14361b2', '645829db1f10a', 'rex'),
(27, '64584351a0c57', '64584351a2398', '64584351a2398', '6458434346b9c', 'chienlo'),
(28, '64584351aaae0', '64584351ad3a7', '64584351ad3a7', '6458434346b9c', 'chienlo'),
(29, '64582a142e388', '64582a142fcb7', '64582a142fcb7', '645829db1f10a', 'chienlo'),
(30, '64582a1434fcd', '64582a14361b2', '64582a14361b2', '645829db1f10a', 'chienlo'),
(31, '64582a142e388', '64582a142fcb7', '64582a142fcb7', '645829db1f10a', 'arren'),
(32, '64582a1434fcd', '64582a14361b2', '64582a14361b2', '645829db1f10a', 'arren'),
(33, '64582a143f33d', '64582a144138a', '64582a144138a', '645829db1f10a', 'arren'),
(34, '64584351a0c57', '64584351a2398', '64584351a2398', '6458434346b9c', 'arren'),
(35, '64584351aaae0', '64584351ad3a6', '64584351ad3a7', '6458434346b9c', 'arren');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
