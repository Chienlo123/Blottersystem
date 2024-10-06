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
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(3, 'chienlo', '5b85847bbe794', -1, 5, 0, 1, '2023-05-07 10:18:10', 1683454626, 'finished', 'true'),
(4, 'chienlo', '64577bfb4741c', 1, 2, 1, 0, '2023-05-07 10:24:53', 1683455069, 'finished', 'true'),
(7, 'arren', '64577bfb4741c', 1, 2, 1, 0, '2023-05-07 10:37:20', 1683455786, 'finished', 'true'),
(8, 'arren', '5b85847bbe794', -1, 5, 0, 1, '2023-05-07 10:38:08', 1683455859, 'finished', 'true'),
(11, 'chienlo', '64582af7d6f3b', 2, 2, 1, 0, '2023-05-07 22:50:20', 1683499806, 'finished', 'true'),
(23, 'chienlo', '645829db1f10a', 0, 0, 0, 0, '2023-05-08 01:18:38', 1683508688, 'finished', 'true'),
(24, 'chienlo', '6458434346b9c', 0, 0, 0, 0, '2023-05-08 01:30:41', 1683509379, 'finished', 'true'),
(28, 'rex', '64582af7d6f3b', 4, 1, 1, -1, '2023-05-08 09:16:35', 1683537378, 'finished', 'true'),
(41, 'arren', '645829db1f10a', 0, 0, 0, 0, '2023-05-08 09:39:00', 1683538711, 'finished', 'true'),
(43, 'arren', '6458434346b9c', 0, 0, 0, 0, '2023-05-08 09:41:18', 1683538864, 'finished', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
