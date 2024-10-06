-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 08:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchCompany` (IN `page` VARCHAR(30))   SELECT c.Car_id,Company,Model,Type,Price,Length,Width,Seating_capacity,Colour,Fuel,Mileage FROM CAR c, CAR_DESIGN cd WHERE c.Company = page AND c.Car_id = cd.Car_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchMileage` (IN `page` INT(10))   SELECT c.Car_id,Company,Model,Type,Price,Length,Width,Seating_capacity,Colour,Fuel,Mileage FROM CAR c, CAR_DESIGN cd WHERE cd.Mileage >= page AND c.Car_id = cd.Car_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchModel` (IN `page` VARCHAR(30))   SELECT c.Car_id,Company,Model,Type,Price,Length,Width,Seating_capacity,Colour,Fuel,Mileage FROM CAR c, CAR_DESIGN cd WHERE c.Model = page AND c.Car_id = cd.Car_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchPrice` (IN `page` INT(10))   SELECT c.Car_id,Company,Model,Type,Price,Length,Width,Seating_capacity,Colour,Fuel,Mileage FROM CAR c, CAR_DESIGN cd WHERE c.Price <= page AND c.Car_id = cd.Car_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchType` (IN `page` VARCHAR(30))   SELECT c.Car_id,Company,Model,Type,Price,Length,Width,Seating_capacity,Colour,Fuel,Mileage FROM CAR c, CAR_DESIGN cd WHERE c.Type = page AND c.Car_id = cd.Car_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(24, '645a152ed685d', '645a152ed80c0'),
(25, '645a152edfca2', '645a152ee117e'),
(26, '645a152ee6c6a', '645a152ee87cb'),
(27, '645a152eee6bc', '645a152eef638'),
(28, '645a152f00f8f', '645a152f026b3'),
(29, '645a152f07a2d', '645a152f09ac6'),
(30, '645a152f0f7e4', '645a152f10814'),
(31, '645a152f172fc', '645a152f18eac'),
(32, '645a152f1ef01', '645a152f1ff00'),
(33, '645a152f26750', '645a152f282c9'),
(34, '645a152f2d43d', '645a152f2e5eb'),
(41, '645a3b0d720a0', '645a3b0d7396c'),
(42, '645a3b0d79a34', '645a3b0d7a9e4'),
(43, '645a3b0d81217', '645a3b0d82e61'),
(44, '645a3b0d894ac', '645a3b0d8ae12'),
(45, '645a3b0d933a1', '645a3b0d94884'),
(46, '645a3b0d994a2', '645a3b0d9a7d9'),
(47, '645a3b0d9f41a', '645a3b0da0130'),
(48, '645a3b0da52cc', '645a3b0da62b1'),
(49, '645a3b0dab0a4', '645a3b0dabd5d'),
(50, '645a3b0dafeb7', '645a3b0db0b47'),
(51, '645a46ecbf543', '645a46ecc0e7a'),
(52, '645a46ecc6e0d', '645a46ecc81f7'),
(53, '645a46eccd790', '645a46ecce7f3'),
(54, '645a46ecd5a88', '645a46ecd7131'),
(55, '645a46ecdd189', '645a46ecded26'),
(56, '645a46ece543c', '645a46ece6774'),
(57, '645a46ecead4e', '645a46ecec9f2'),
(58, '645a46ecf19ba', '645a46ecf2c79'),
(59, '645a46ed03d59', '645a46ed04f77'),
(60, '645a46ed0908b', '645a46ed0a421'),
(61, '645a46ed0ebd7', '645a46ed0ffcb'),
(62, '645ca05a168e8', '645ca05a19a00'),
(63, '645ca05a23a81', '645ca05a256eb'),
(86, '6460881ba27c9', '6460881ba4a1c'),
(87, '6460881baa0f0', '6460881bac300'),
(88, '6460881bb5950', '6460881bb6fba'),
(89, '6460881bbba15', '6460881bbc6e8'),
(90, '6460881bc19b7', '6460881bc26c2'),
(91, '6460881bc8c89', '6460881bca5cb'),
(92, '6460881bcf812', '6460881bd0bb4'),
(93, '6460881bd56ed', '6460881bd6cad'),
(94, '6460881bdc495', '6460881bdd8aa'),
(95, '6460881be3114', '6460881be422e'),
(96, '6460881beaabc', '6460881beb81d'),
(107, '646099d309bb4', '646099d30c515'),
(108, '646099d312041', '646099d317676'),
(109, '646099d31f8fa', '646099d3209b2'),
(110, '646099d327394', '646099d328beb'),
(111, '646099d32cf72', '646099d32e140'),
(112, '646099d3321ec', '646099d333572'),
(113, '646099d33a03d', '646099d33ad0d'),
(114, '646099d340ae8', '646099d34283f'),
(115, '646099d347c20', '646099d348c5a'),
(116, '646099d34d5e4', '646099d34e41c'),
(117, '6460a21b9c2f6', '6460a21b9d6b0'),
(118, '6460a21ba44ec', '6460a21ba53f7'),
(119, '6460a21baba63', '6460a21bad1c0'),
(120, '6460a21bb28db', '6460a21bb3f17'),
(121, '6460a21bb9ede', '6460a21bbb5c6'),
(122, '6460a21bc11c5', '6460a21bc1dcb'),
(123, '6460a21bc781f', '6460a21bc8791'),
(124, '6460a21bcd243', '6460a21bce06c'),
(125, '6460a21bd4cc7', '6460a21bd6601'),
(126, '6460a21bdcff5', '6460a21bde35b'),
(127, '64637542ae247', '64637542af880'),
(128, '64637542b70ba', '64637542b81f6'),
(129, '646c702fae97c', '646c702fb42ac'),
(130, '646c702fc0383', '646c702fc187e'),
(131, '646c7608d9897', '646c7608db42a'),
(132, '646c7608e1056', '646c7608e1fa0'),
(133, '646f07dd5572a', '646f07dd58c4f'),
(134, '646f07dd658d2', '646f07dd67918');

-- --------------------------------------------------------

--
-- Table structure for table `answerlaspinas`
--

CREATE TABLE `answerlaspinas` (
  `id` int(11) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answerlaspinas`
--

INSERT INTO `answerlaspinas` (`id`, `qid`, `ansid`) VALUES
(1, '65390a447de98', '65390a447ee05'),
(2, '65390a44864f4', '65390a4487864'),
(3, '65390ba26db81', '65390ba26fcfb'),
(4, '65390ba279c1e', '65390ba27ac3b');

-- --------------------------------------------------------

--
-- Table structure for table `answernovaliches`
--

CREATE TABLE `answernovaliches` (
  `id` int(11) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answernovaliches`
--

INSERT INTO `answernovaliches` (`id`, `qid`, `ansid`) VALUES
(1, '645de15785ee0', '645de15786f00'),
(2, '645de15792eff', '645de157943b3');

-- --------------------------------------------------------

--
-- Table structure for table `answerpila`
--

CREATE TABLE `answerpila` (
  `id` int(11) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answerpila`
--

INSERT INTO `answerpila` (`id`, `qid`, `ansid`) VALUES
(1, '645df1fd8b38b', '645df1fd8c4a7'),
(2, '645df1fd9306f', '645df1fd943fc');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(8, 'Heavy Vehicles'),
(9, 'Light Vehicles'),
(10, 'Motorcycles'),
(11, 'Motor Tricycles'),
(13, 'Bike'),
(14, 'ebike');

-- --------------------------------------------------------

--
-- Table structure for table `categorieslaspinas`
--

CREATE TABLE `categorieslaspinas` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorieslaspinas`
--

INSERT INTO `categorieslaspinas` (`cat_id`, `cat_title`) VALUES
(3, 'sheshhh');

-- --------------------------------------------------------

--
-- Table structure for table `categoriesnovaliches`
--

CREATE TABLE `categoriesnovaliches` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoriespila`
--

CREATE TABLE `categoriespila` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoriespila`
--

INSERT INTO `categoriespila` (`cat_id`, `cat_title`) VALUES
(1, 'ediwow'),
(2, 'ebike');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 1, 2, 'hi', 1, '2023-05-12 17:07:52'),
(2, 1, 2, 'wew', 1, '2023-05-12 17:08:02'),
(3, 2, 1, 'bading bading', 1, '2023-05-12 17:08:18'),
(4, 3, 1, 'ulol', 1, '2023-05-12 17:08:52'),
(5, 2, 1, 'lol', 1, '2023-05-16 20:27:41'),
(6, 1, 3, 'wew', 1, '2023-05-23 16:18:24'),
(7, 3, 1, 'lol', 1, '2023-05-23 16:18:39'),
(8, 2, 1, 'nagbayad na ako brooo check gcash', 1, '2023-05-25 14:57:01'),
(9, 1, 2, 'wehhhhh', 1, '2023-05-25 14:57:27'),
(10, 1, 15, 'hello', 1, '2023-11-02 02:40:13'),
(11, 1, 15, 'bading', 1, '2023-11-02 02:40:45'),
(12, 15, 1, 'wews', 1, '2023-11-02 02:41:13'),
(13, 1, 13, 'wews boooo', 1, '2023-11-02 02:41:41'),
(14, 13, 13, 'wew', 1, '2023-11-02 02:42:05'),
(15, 13, 13, 'wew', 1, '2023-11-02 02:42:08'),
(16, 13, 1, 'wews', 1, '2023-11-02 02:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `chatslaspinas`
--

CREATE TABLE `chatslaspinas` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatslaspinas`
--

INSERT INTO `chatslaspinas` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 2, 1, 'Hi', 1, '2023-05-12 17:51:21'),
(2, 1, 2, 'bang badingan', 1, '2023-05-12 17:51:40'),
(3, 2, 1, 'wews', 0, '2023-05-12 17:51:51'),
(4, 3, 1, 'hello daddy', 1, '2023-05-12 17:52:27'),
(5, 1, 3, 'wews', 1, '2023-05-12 17:52:42'),
(6, 1, 4, 'wews', 1, '2023-05-12 18:14:52'),
(7, 4, 1, 'wtf', 1, '2023-05-12 18:15:14'),
(8, 1, 4, 'bading bading', 0, '2023-05-12 18:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `chatsnovaliches`
--

CREATE TABLE `chatsnovaliches` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatsnovaliches`
--

INSERT INTO `chatsnovaliches` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 2, 1, 'hi kyahhh', 1, '2023-05-12 18:41:12'),
(2, 2, 1, 'wew', 1, '2023-05-12 18:42:01'),
(3, 2, 1, 'bading', 1, '2023-05-12 18:42:09'),
(4, 1, 2, 'lah pereng sere', 1, '2023-05-12 18:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `chatspila`
--

CREATE TABLE `chatspila` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatspila`
--

INSERT INTO `chatspila` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 1, 2, 'hi', 1, '2023-05-12 19:01:27'),
(2, 2, 1, 'wews bading', 1, '2023-05-12 19:01:41'),
(3, 1, 2, 'wwewewdwe fwe', 1, '2023-05-12 19:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, 'wew', 'gdsgs', 1),
(2, 'edi wow', 'ghdsgdgsd', 1),
(3, 'gds', 'gds', 1),
(4, 'gds', 'gds', 1),
(5, 'gds', 'gdsgdsg', 1),
(6, 'wew', 'gdsgds', 1),
(7, 'gdgd', 'sgsd', 1),
(8, 'gds', 'gdsgsd', 1),
(9, 'wew', 'gdsgd', 1),
(10, 'gds', 'gsdg', 1),
(11, 'gds', 'gds', 1),
(12, 'gds', 'gsd', 1),
(13, 'gsd', 'gds', 1),
(14, 'ggwp', '123', 1),
(15, 'gds', 'gds', 1),
(16, 'gds', 'gdsgds', 1),
(17, 'fhd', 'dhb', 1),
(18, 'gd', 'gds', 1),
(19, 'gds', 'gds', 1),
(20, 'gds', 'gds', 1),
(21, 'gds', 'gds', 1),
(22, 'gds', 'gds', 1),
(23, 'gdsgds', 'gds', 1),
(24, 'gsd', 'gds', 1),
(25, 'chienlo', '123', 1),
(26, 'hfd', 'hfd', 1),
(27, 'gds', 'gds', 1),
(28, 'gd', 'gds', 1),
(29, 'gds', 'gds', 1),
(30, 'wew', 'wew', 1),
(31, 'vxz', 'bxz', 1),
(32, 'chienlo', '123', 1),
(33, 'd', 'gds', 1),
(34, 'gd', 'gds', 1),
(35, 'gsd', 'gds', 1),
(36, 'rex', 'gdgds', 1),
(37, 'gd', 'ggds', 1),
(38, 'chienlo', '12345', 1),
(39, 'gds', 'gds', 1),
(40, 'hbdsf', 'gds', 1),
(41, 'ggds', 'gds', 1),
(42, 'gds', 'gds', 1),
(43, 'gds', 'gds', 1),
(44, 'gd', 'gd', 1),
(45, 'gds', 'gds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(2, 'chienlo', 'chienlomejia660@gmail.com', 'gdsgds'),
(6, 'wew', 'chienlomejia660@gmail.com', 'gdsgds'),
(7, 'james', 'ivan@gmail.com', 'gdsgsdgsdgsd'),
(8, 'wew', 'wew@gmail.com', 'wew'),
(9, 'chienlowewwe', 'arrenjamesvalmoria@yahoo.com', 'gdsgsdgsd'),
(11, 'Chienlo Joseph Mejia', 'a@gmail.com', 'fsdgfsd'),
(12, 'Chienlo Joseph Mejia', 'wew@gmail.com', '123'),
(13, 'Chienlo Joseph Mejia', 'wew@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `contactadmin`
--

CREATE TABLE `contactadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactadmin`
--

INSERT INTO `contactadmin` (`id`, `name`, `email`, `message`) VALUES
(2, 'Chienlo Joseph Mejia', 'a@gmail.com', 'hello deym');

-- --------------------------------------------------------

--
-- Table structure for table `contactlaspinas`
--

CREATE TABLE `contactlaspinas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactlaspinas`
--

INSERT INTO `contactlaspinas` (`id`, `name`, `email`, `message`) VALUES
(3, 'gg', 'ggwp@gmail.com', 'gdsgds');

-- --------------------------------------------------------

--
-- Table structure for table `contactnovaliches`
--

CREATE TABLE `contactnovaliches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactnovaliches`
--

INSERT INTO `contactnovaliches` (`id`, `name`, `email`, `message`) VALUES
(1, 'chienlowewwe', 'ererffsd0@gmail.com', 'gdsgds'),
(2, 'wew', 'wew@gmail.com', 'wew');

-- --------------------------------------------------------

--
-- Table structure for table `contactpila`
--

CREATE TABLE `contactpila` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactpila`
--

INSERT INTO `contactpila` (`id`, `name`, `email`, `message`) VALUES
(1, 'gg', '123@gmail.com', 'gdsgsd'),
(2, 'jj', 'ivan@gmail.com', 'gdsgds'),
(3, 'chienlo', 'chienlomejia660@gmail.com', 'wews'),
(4, 'chienlowewwe', 'arrenjamesvalmoria@yahoo.com', 'wrewrwe'),
(5, 'gds', 'arrenjamesvalmoria@yahoo.com', 'gdsgds');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`) VALUES
(1, 1, 2),
(2, 3, 1),
(3, 1, 15),
(4, 1, 13),
(5, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `conversationslaspinas`
--

CREATE TABLE `conversationslaspinas` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversationslaspinas`
--

INSERT INTO `conversationslaspinas` (`conversation_id`, `user_1`, `user_2`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `conversationsnovaliches`
--

CREATE TABLE `conversationsnovaliches` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversationsnovaliches`
--

INSERT INTO `conversationsnovaliches` (`conversation_id`, `user_1`, `user_2`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `conversationspila`
--

CREATE TABLE `conversationspila` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversationspila`
--

INSERT INTO `conversationspila` (`conversation_id`, `user_1`, `user_2`) VALUES
(1, 1, 2);

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
(98, 'rex', '645ca0407806c', -4, 2, -2, 2, '2023-05-11 08:19:18', 1683793106, 'finished', 'true'),
(99, 'chienlo', '645ca0407806c', 0, 2, 1, 1, '2023-05-16 12:19:22', 1684239537, 'finished', 'true'),
(100, 'chienlo', '646375231a2be', 0, 2, 1, 1, '2023-05-16 12:23:20', 1684239713, 'finished', 'true'),
(101, 'chienlo', '646c701c7ee2e', 0, 2, 1, 1, '2023-05-23 07:51:14', 1684828233, 'finished', 'true'),
(104, 'ericka', '646f07876d579', 2, 2, 2, 0, '2023-05-25 07:08:52', 1684998521, 'finished', 'true'),
(105, 'ericka', '646c75c2caf95', 2, 2, 2, 0, '2023-05-25 07:09:47', 1684998575, 'finished', 'true'),
(106, 'ericka', '646c701c7ee2e', 2, 2, 2, 0, '2023-05-25 07:10:12', 1684998600, 'finished', 'true'),
(107, 'chienlo', '646c75c2caf95', 0, 2, 0, 0, '2023-06-10 09:42:14', 1686390107, 'finished', 'true'),
(117, 'user', '646f07876d579', 0, 0, 0, 0, '2023-10-25 11:46:13', 1698234359, 'finished', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `historylaspinas`
--

CREATE TABLE `historylaspinas` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `eid` text NOT NULL,
  `score` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `correct` int(10) NOT NULL,
  `wrong` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historynovaliches`
--

CREATE TABLE `historynovaliches` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `eid` text NOT NULL,
  `score` int(255) NOT NULL,
  `level` int(255) NOT NULL,
  `correct` int(255) NOT NULL,
  `wrong` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `historynovaliches`
--

INSERT INTO `historynovaliches` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(2, 'chienlo', '645de144713d1', -2, 1, -1, 1, '2023-05-12 06:53:07', 1683874373, 'finished', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `historypila`
--

CREATE TABLE `historypila` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `eid` text NOT NULL,
  `score` int(255) NOT NULL,
  `level` int(255) NOT NULL,
  `correct` int(255) NOT NULL,
  `wrong` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `score_updated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `historypila`
--

INSERT INTO `historypila` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(3, 'wew', '645df1e80f5ee', -4, 2, -2, 2, '2023-05-12 08:02:32', 1683878524, 'finished', 'true'),
(5, 'user', '645df1e80f5ee', 0, 0, 0, 0, '2023-10-30 12:10:22', 1698667809, 'finished', 'true');

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
(93, '645a152ed685d', 'Student Permit', '645a152ed80c0'),
(94, '645a152ed685d', 'Passport', '645a152ed80c8'),
(95, '645a152ed685d', 'ID', '645a152ed80c9'),
(96, '645a152ed685d', 'None of the Above', '645a152ed80ca'),
(97, '645a152edfca2', 'Road Safety', '645a152ee117e'),
(98, '645a152edfca2', 'Road Ethics', '645a152ee1186'),
(99, '645a152edfca2', 'Road Courtesy', '645a152ee1187'),
(100, '645a152edfca2', 'All of the answers mentioned', '645a152ee1189'),
(101, '645a152ee6c6a', 'Student License and Professional Drivers License', '645a152ee87c3'),
(102, '645a152ee6c6a', 'Professional Drivers License and Non-Professional Driver\'s', '645a152ee87cb'),
(103, '645a152ee6c6a', 'PRC License and Non-Professional Drivers License', '645a152ee87cc'),
(104, '645a152ee6c6a', 'None of the Above', '645a152ee87cd'),
(105, '645a152eee6bc', 'Pribilehiyo(Privilege)', '645a152eef630'),
(106, '645a152eee6bc', 'karapatan(Right)', '645a152eef638'),
(107, '645a152eee6bc', 'Pareho(Both)', '645a152eef639'),
(108, '645a152eee6bc', 'None of the Above', '645a152eef63a'),
(109, '645a152f00f8f', 'Seat belt Law', '645a152f026a8'),
(110, '645a152f00f8f', 'Anti-Distracted Driving Act', '645a152f026b1'),
(111, '645a152f00f8f', 'Clean Air Act', '645a152f026b2'),
(112, '645a152f00f8f', 'Law on the Rationalizing and  Strengthening of Drivers Licensing System', '645a152f026b3'),
(113, '645a152f07a2d', 'Tama(true)', '645a152f09ac6'),
(114, '645a152f07a2d', 'False(mali)', '645a152f09ad3'),
(115, '645a152f07a2d', 'n/a', '645a152f09ad9'),
(116, '645a152f07a2d', 'n/a', '645a152f09ada'),
(117, '645a152f0f7e4', 'Tama(true)', '645a152f1080c'),
(118, '645a152f0f7e4', 'False(false)', '645a152f10814'),
(119, '645a152f0f7e4', 'n/a', '645a152f10815'),
(120, '645a152f0f7e4', 'n/a', '645a152f10816'),
(121, '645a152f172fc', 'Tama(true)', '645a152f18eac'),
(122, '645a152f172fc', 'Mali(false)', '645a152f18eb4'),
(123, '645a152f172fc', 'n/a', '645a152f18eb5'),
(124, '645a152f172fc', 'n/a', '645a152f18eb7'),
(125, '645a152f1ef01', 'Tama(true)', '645a152f1ff00'),
(126, '645a152f1ef01', 'Mali(false)', '645a152f1ff08'),
(127, '645a152f1ef01', 'n/a', '645a152f1ff0a'),
(128, '645a152f1ef01', 'n/a', '645a152f1ff0b'),
(129, '645a152f26750', '17 hours', '645a152f282c0'),
(130, '645a152f26750', '15 hours', '645a152f282c9'),
(131, '645a152f26750', '13 hours', '645a152f282ca'),
(132, '645a152f26750', '10 hours', '645a152f282cb'),
(133, '645a152f2d43d', '1', '645a152f2e5e3'),
(134, '645a152f2d43d', '2', '645a152f2e5eb'),
(135, '645a152f2d43d', '3', '645a152f2e5ec'),
(136, '645a152f2d43d', '4', '645a152f2e5ed'),
(161, '645a3b0d720a0', 'Tama(true)', '645a3b0d7396c'),
(162, '645a3b0d720a0', 'Mali(false)', '645a3b0d73973'),
(163, '645a3b0d720a0', 'n/a', '645a3b0d73975'),
(164, '645a3b0d720a0', 'n/a', '645a3b0d73976'),
(165, '645a3b0d79a34', 'February 1913', '645a3b0d7a9db'),
(166, '645a3b0d79a34', 'February 1911', '645a3b0d7a9e3'),
(167, '645a3b0d79a34', 'February 1912', '645a3b0d7a9e4'),
(168, '645a3b0d79a34', 'February 1910', '645a3b0d7a9e5'),
(169, '645a3b0d81217', 'Executive Director', '645a3b0d82e61'),
(170, '645a3b0d81217', 'Secretary', '645a3b0d82e69'),
(171, '645a3b0d81217', 'Assistant Secretary', '645a3b0d82e6a'),
(172, '645a3b0d81217', 'Under Secretary', '645a3b0d82e6b'),
(173, '645a3b0d894ac', 'Goal', '645a3b0d8ae0b'),
(174, '645a3b0d894ac', 'Vision', '645a3b0d8ae12'),
(175, '645a3b0d894ac', 'Objective', '645a3b0d8ae14'),
(176, '645a3b0d894ac', 'Mission', '645a3b0d8ae15'),
(177, '645a3b0d933a1', 'May 30, 1987', '645a3b0d94884'),
(178, '645a3b0d933a1', 'March 30, 1987', '645a3b0d9488d'),
(179, '645a3b0d933a1', 'June 30,1987', '645a3b0d9488f'),
(180, '645a3b0d933a1', 'April 30,1987', '645a3b0d94890'),
(181, '645a3b0d994a2', 'Issuance of Licenses', '645a3b0d9a7ce'),
(182, '645a3b0d994a2', 'Distribution of Motor Vehicle Franchise', '645a3b0d9a7d7'),
(183, '645a3b0d994a2', 'Registration of Motor Vehicles', '645a3b0d9a7d8'),
(184, '645a3b0d994a2', 'Law Enforcement', '645a3b0d9a7d9'),
(185, '645a3b0d9f41a', 'PHP 105.7 billion', '645a3b0da0128'),
(186, '645a3b0d9f41a', 'PHP 500 million', '645a3b0da0130'),
(187, '645a3b0d9f41a', 'PHP 105.7 million', '645a3b0da0131'),
(188, '645a3b0d9f41a', 'PHP 100.5 billion', '645a3b0da0132'),
(189, '645a3b0da52cc', 'Land Transportation Cooperative', '645a3b0da62b1'),
(190, '645a3b0da52cc', 'Land Transportation Commision', '645a3b0da62b9'),
(191, '645a3b0da52cc', 'Land Transportation Community', '645a3b0da62ba'),
(192, '645a3b0da52cc', 'Land Transportation Committee', '645a3b0da62bb'),
(193, '645a3b0dab0a4', 'Vission', '645a3b0dabd5d'),
(194, '645a3b0dab0a4', 'Mission', '645a3b0dabd65'),
(195, '645a3b0dab0a4', 'Objective', '645a3b0dabd66'),
(196, '645a3b0dab0a4', 'Goal', '645a3b0dabd67'),
(197, '645a3b0dafeb7', 'DPWH or Department of Public Works and Highways', '645a3b0db0b3f'),
(198, '645a3b0dafeb7', 'LTO or Land Transportation Office', '645a3b0db0b47'),
(199, '645a3b0dafeb7', 'MMDA or Metropolitan Manila Development Authority', '645a3b0db0b48'),
(200, '645a3b0dafeb7', 'LTFRB or Land Transportation Franchising and Regulatory Board', '645a3b0db0b49'),
(201, '645a46ecbf543', 'Police Officers', '645a46ecc0e72'),
(202, '645a46ecbf543', 'Mechanics', '645a46ecc0e79'),
(203, '645a46ecbf543', 'Students', '645a46ecc0e7a'),
(204, '645a46ecbf543', 'Conductors', '645a46ecc0e7b'),
(205, '645a46ecc6e0d', 'Mga tao na may valid Drivers License.(people who have valid drivers licenses)', '645a46ecc81ed'),
(206, '645a46ecc6e0d', 'Mga kaibigan na may student permit.(Friends who have student permits)', '645a46ecc81f5'),
(207, '645a46ecc6e0d', 'Kahit sino basta hindi menor de edad.(Anyone as long as they are not minors)', '645a46ecc81f6'),
(208, '645a46ecc6e0d', 'Wala.(No one)', '645a46ecc81f7'),
(209, '645a46eccd790', 'Tama(true)', '645a46ecce7f3'),
(210, '645a46eccd790', 'Male(false)', '645a46ecce7fc'),
(211, '645a46eccd790', 'n/a', '645a46ecce7fd'),
(212, '645a46eccd790', 'n/a', '645a46ecce7fe'),
(213, '645a46ecd5a88', '17 years old', '645a46ecd7128'),
(214, '645a46ecd5a88', '19 years old', '645a46ecd712f'),
(215, '645a46ecd5a88', '18 years old', '645a46ecd7131'),
(216, '645a46ecd5a88', '16 years old', '645a46ecd7132'),
(217, '645a46ecdd189', '10 DL codes', '645a46ecded1e'),
(218, '645a46ecdd189', '11 DL codes', '645a46ecded26'),
(219, '645a46ecdd189', '9 DL codes', '645a46ecded27'),
(220, '645a46ecdd189', '8 DL codes', '645a46ecded28'),
(221, '645a46ece543c', 'Tama(true)', '645a46ece6774'),
(222, '645a46ece543c', 'Mali(false)', '645a46ece677b'),
(223, '645a46ece543c', 'n/a', '645a46ece677c'),
(224, '645a46ece543c', 'n/a', '645a46ece677d'),
(225, '645a46ecead4e', 'Student Permit', '645a46ecec9f2'),
(226, '645a46ecead4e', 'Driver\'s License ', '645a46ecec9fa'),
(227, '645a46ecead4e', 'Authorization letter', '645a46ecec9fb'),
(228, '645a46ecead4e', 'Plate number', '645a46ecec9fc'),
(229, '645a46ecf19ba', '5-9 demerit points', '645a46ecf2c71'),
(230, '645a46ecf19ba', '40 demerit points', '645a46ecf2c78'),
(231, '645a46ecf19ba', '20 demerit points', '645a46ecf2c79'),
(232, '645a46ecf19ba', '10 demerit points', '645a46ecf2c7a'),
(233, '645a46ed03d59', 'Mga tao na may valid  Drivers license ', '645a46ed04f6e'),
(234, '645a46ed03d59', 'Mga kaibigang na may student permit.', '645a46ed04f76'),
(235, '645a46ed03d59', 'Kahit sino basta hindi menor de edad', '645a46ed04f77'),
(236, '645a46ed03d59', 'Wala', '645a46ed04f78'),
(237, '645a46ed0908b', 'Tama(true)', '645a46ed0a421'),
(238, '645a46ed0908b', 'Mali(false)', '645a46ed0a42a'),
(239, '645a46ed0908b', 'n/a', '645a46ed0a42b'),
(240, '645a46ed0908b', 'n/a', '645a46ed0a42c'),
(241, '645a46ed0ebd7', '130 araw(130days)', '645a46ed0ffcb'),
(242, '645a46ed0ebd7', '110 araw(110days)', '645a46ed0ffd1'),
(243, '645a46ed0ebd7', '90 araw(90days)', '645a46ed0ffd3'),
(244, '645a46ed0ebd7', '70 araw(70days)', '645a46ed0ffd4'),
(245, '645ca05a168e8', '1', '645ca05a199f9'),
(246, '645ca05a168e8', '2', '645ca05a19a00'),
(247, '645ca05a168e8', '3', '645ca05a19a01'),
(248, '645ca05a168e8', '4', '645ca05a19a02'),
(249, '645ca05a23a81', '1', '645ca05a256de'),
(250, '645ca05a23a81', '2', '645ca05a256e9'),
(251, '645ca05a23a81', '3', '645ca05a256ea'),
(252, '645ca05a23a81', '4', '645ca05a256eb'),
(341, '6460881ba27c9', 'Police Officers', '6460881ba4a14'),
(342, '6460881ba27c9', 'Mechanics', '6460881ba4a1b'),
(343, '6460881ba27c9', 'Students', '6460881ba4a1c'),
(344, '6460881ba27c9', 'Conductors', '6460881ba4a1d'),
(345, '6460881baa0f0', 'Mga tao na may valid Drivers License.(people who have valid drivers licenses)', '6460881bac2f9'),
(346, '6460881baa0f0', 'Mga kaibigan na may student permit.(Friends who have student permits)', '6460881bac2ff'),
(347, '6460881baa0f0', 'Kahit sino basta hindi menor de edad.(Anyone as long as they are not minors)', '6460881bac300'),
(348, '6460881baa0f0', 'Wala.(No one)', '6460881bac301'),
(349, '6460881bb5950', 'Tama(true)', '6460881bb6fba'),
(350, '6460881bb5950', 'Male(false)', '6460881bb6fc2'),
(351, '6460881bb5950', 'n/a', '6460881bb6fc3'),
(352, '6460881bb5950', 'n/a', '6460881bb6fc4'),
(353, '6460881bbba15', '17 years old', '6460881bbc6df'),
(354, '6460881bbba15', '19 years old', '6460881bbc6e7'),
(355, '6460881bbba15', '18 years old', '6460881bbc6e8'),
(356, '6460881bbba15', '16 years old', '6460881bbc6e9'),
(357, '6460881bc19b7', '10 DL codes', '6460881bc26c2'),
(358, '6460881bc19b7', '11 DL codes', '6460881bc26c9'),
(359, '6460881bc19b7', '9 DL codes', '6460881bc26ca'),
(360, '6460881bc19b7', '8 DL codes', '6460881bc26cc'),
(361, '6460881bc8c89', 'Tama(true)', '6460881bca5cb'),
(362, '6460881bc8c89', 'Mali(false)', '6460881bca5d2'),
(363, '6460881bc8c89', 'n/a', '6460881bca5d3'),
(364, '6460881bc8c89', 'n/a', '6460881bca5d5'),
(365, '6460881bcf812', 'Student Permit', '6460881bd0bb4'),
(366, '6460881bcf812', 'Driver\'s License ', '6460881bd0bbc'),
(367, '6460881bcf812', 'Authorization letter', '6460881bd0bbe'),
(368, '6460881bcf812', 'Plate number', '6460881bd0bbf'),
(369, '6460881bd56ed', '5-9 demerit points', '6460881bd6ca4'),
(370, '6460881bd56ed', '40 demerit points', '6460881bd6cad'),
(371, '6460881bd56ed', '20 demerit points', '6460881bd6cae'),
(372, '6460881bd56ed', '10 demerit points', '6460881bd6caf'),
(373, '6460881bdc495', 'Mga tao na may valid  Drivers license.(people who have valid driver\'s licenses)', '6460881bdd8a0'),
(374, '6460881bdc495', 'Mga kaibigang na may student permit.(Friends who have student permits)', '6460881bdd8a9'),
(375, '6460881bdc495', 'Kahit sino basta hindi menor de edad(Anyone as long as they are not minors)', '6460881bdd8aa'),
(376, '6460881bdc495', 'Wala.(No one)', '6460881bdd8ab'),
(377, '6460881be3114', 'Tama(true)', '6460881be422e'),
(378, '6460881be3114', 'Mali(false)', '6460881be4236'),
(379, '6460881be3114', 'n/a', '6460881be4237'),
(380, '6460881be3114', 'n/a', '6460881be4238'),
(381, '6460881beaabc', '130 araw(130days)', '6460881beb813'),
(382, '6460881beaabc', '110 araw(110days)', '6460881beb81d'),
(383, '6460881beaabc', '90 araw(90days)', '6460881beb81e'),
(384, '6460881beaabc', '70 araw(70days)', '6460881beb820'),
(425, '646099d309bb4', 'Steady Green Light', '646099d30c50d'),
(426, '646099d309bb4', 'Steady Red Light', '646099d30c515'),
(427, '646099d309bb4', 'Steady Yellow Light', '646099d30c516'),
(428, '646099d309bb4', 'None of the Above', '646099d30c517'),
(429, '646099d312041', 'Hindi pinapayagan ang mga pedestrian na tumawid sa pedestrian lane.', '646099d31766e'),
(430, '646099d312041', 'Bumagal at magpatuloy nang may pag-iingat.(Slow down and proceed with caution.)', '646099d317676'),
(431, '646099d312041', 'Dapat kang tumigil. Magpatuloy lamang kung ligtas na gawin ito.', '646099d317678'),
(432, '646099d312041', 'None of the above', '646099d317679'),
(433, '646099d31f8fa', 'Steady Red light ', '646099d3209a9'),
(434, '646099d31f8fa', 'Steady Yellow light ', '646099d3209b1'),
(435, '646099d31f8fa', 'Steady Green light ', '646099d3209b2'),
(436, '646099d31f8fa', 'None of the Above', '646099d3209b3'),
(437, '646099d327394', 'Magpatuloy sa pagmamaneho.(Proceed with driving)', '646099d328be3'),
(438, '646099d327394', 'Bumagal at magpatuloy nang may pag-iingat.(Slow down and proceed with caution)', '646099d328bea'),
(439, '646099d327394', 'Huminto sa itinalagang linya.(Stop at the designated line)', '646099d328beb'),
(440, '646099d327394', 'None of the Above', '646099d328bec'),
(441, '646099d32cf72', 'At a yellow traffic light', '646099d32e137'),
(442, '646099d32cf72', 'At a red traffic light', '646099d32e140'),
(443, '646099d32cf72', 'At a green traffic light', '646099d32e141'),
(444, '646099d32cf72', 'None of the above', '646099d32e142'),
(445, '646099d3321ec', 'Tama(true)', '646099d333572'),
(446, '646099d3321ec', 'Mali(false)', '646099d33357a'),
(447, '646099d3321ec', 'n/a', '646099d33357b'),
(448, '646099d3321ec', 'n/a', '646099d33357c'),
(449, '646099d33a03d', 'Tama(true)', '646099d33ad0d'),
(450, '646099d33a03d', 'False(false)', '646099d33ad14'),
(451, '646099d33a03d', 'n/a', '646099d33ad15'),
(452, '646099d33a03d', 'n/a', '646099d33ad16'),
(453, '646099d340ae8', 'Maging dahilan ng pagigi mong mabuting mamamayan.(make you  a good citizen)', '646099d342836'),
(454, '646099d340ae8', 'Walang epekto.(Not affect you at all)', '646099d34283d'),
(455, '646099d340ae8', 'Dahilan para masangkot  sa nakamamatay na road crash.(Involved you in a fatal road crash)', '646099d34283f'),
(456, '646099d340ae8', 'Magliligtas sa iyo.(make you safe)', '646099d342840'),
(457, '646099d347c20', 'Pedestrians are forbidden to cross.', '646099d348c5a'),
(458, '646099d347c20', 'pedestrian can now cross through the pedestrian lane.', '646099d348c62'),
(459, '646099d347c20', 'Pedestrian must wait for yellow light.', '646099d348c63'),
(460, '646099d347c20', 'None of the above', '646099d348c64'),
(461, '646099d34d5e4', 'Bawal ang pagtawid sa pedestrian lanes. (Crossing in the pedestrian lanes is prohibited)', '646099d34e415'),
(462, '646099d34d5e4', 'Pinapayagan ang  pagtawid sa pedestrian lanes.(Allowed to cross the pedestrian lanes)', '646099d34e41c'),
(463, '646099d34d5e4', 'pwedeng tumakbo.(Can run.)', '646099d34e41d'),
(464, '646099d34d5e4', 'None of the above', '646099d34e41e'),
(465, '6460a21b9c2f6', 'Call an auto electrician and have it repaired', '6460a21b9d6a9'),
(466, '6460a21b9c2f6', 'Fix electrical accesories using safety tools and equipment', '6460a21b9d6b0'),
(467, '6460a21b9c2f6', 'Be practical.Choose cheap and substandard wires.', '6460a21b9d6b1'),
(468, '6460a21b9c2f6', 'Install the accessory with the readily available replacement on-hand ', '6460a21b9d6b2'),
(469, '6460a21ba44ec', 'Use gadgets and accessories when the engine is off', '6460a21ba53f7'),
(470, '6460a21ba44ec', 'keep batteries tightly fastened', '6460a21ba53ff'),
(471, '6460a21ba44ec', 'Turn off all the lights before getting off', '6460a21ba5400'),
(472, '6460a21ba44ec', 'Limit short rides', '6460a21ba5401'),
(473, '6460a21baba63', 'Making repairs when something is wrong', '6460a21bad1b6'),
(474, '6460a21baba63', 'Regular machine inspection and condition monitoring', '6460a21bad1c0'),
(475, '6460a21baba63', 'Acting on failure conditions followed by remediation', '6460a21bad1c1'),
(476, '6460a21baba63', 'Accommodating failure as routine or normal', '6460a21bad1c2'),
(477, '6460a21bb28db', 'Grease', '6460a21bb3f0c'),
(478, '6460a21bb28db', 'Water', '6460a21bb3f15'),
(479, '6460a21bb28db', 'Petroleum jelly', '6460a21bb3f16'),
(480, '6460a21bb28db', 'Oil', '6460a21bb3f17'),
(481, '6460a21bb9ede', 'Tama(True)', '6460a21bbb5c6'),
(482, '6460a21bb9ede', 'Mali(False)', '6460a21bbb5cd'),
(483, '6460a21bb9ede', 'n/a', '6460a21bbb5ce'),
(484, '6460a21bb9ede', 'n/a', '6460a21bbb5cf'),
(485, '6460a21bc11c5', 'Avoid overfilling of brake fluid', '6460a21bc1dc2'),
(486, '6460a21bc11c5', 'Replace radiator cap if required', '6460a21bc1dca'),
(487, '6460a21bc11c5', 'Always check the condition of rotor and pads', '6460a21bc1dcb'),
(488, '6460a21bc11c5', 'Check engine oil regulary', '6460a21bc1dcc'),
(489, '6460a21bc781f', 'Water', '6460a21bc8788'),
(490, '6460a21bc781f', 'Tires', '6460a21bc878f'),
(491, '6460a21bc781f', 'Gas', '6460a21bc8790'),
(492, '6460a21bc781f', 'Brakes', '6460a21bc8791'),
(493, '6460a21bcd243', 'Tama(true)', '6460a21bce06c'),
(494, '6460a21bcd243', 'Mali(false)', '6460a21bce074'),
(495, '6460a21bcd243', 'n/a', '6460a21bce075'),
(496, '6460a21bcd243', 'n/a', '6460a21bce076'),
(497, '6460a21bd4cc7', 'Road pre-trip checkup', '6460a21bd65f6'),
(498, '6460a21bd4cc7', 'Road suitability', '6460a21bd65fe'),
(499, '6460a21bd4cc7', 'Roadworthiness', '6460a21bd65ff'),
(500, '6460a21bd4cc7', 'Road Safety', '6460a21bd6601'),
(501, '6460a21bdcff5', 'Battery,Lights,Oil,Water,Brake,Accesories,Gas,Electrical,Tires, and Self.', '6460a21bde353'),
(502, '6460a21bdcff5', 'Battery,Lights,Oil,Water,Brake,Airbag,Gas,Electricity,Tires,and Self', '6460a21bde35a'),
(503, '6460a21bdcff5', 'Battery,Lights,Oil,Water,Brake Light,Accesories,Gas,Electrical,Tires and Self', '6460a21bde35b'),
(504, '6460a21bdcff5', 'None of the above', '6460a21bde35c'),
(505, '64637542ae247', '1', '64637542af877'),
(506, '64637542ae247', '2', '64637542af87e'),
(507, '64637542ae247', '3', '64637542af87f'),
(508, '64637542ae247', '0', '64637542af880'),
(509, '64637542b70ba', '1', '64637542b81ef'),
(510, '64637542b70ba', '2', '64637542b81f5'),
(511, '64637542b70ba', '6', '64637542b81f6'),
(512, '64637542b70ba', '4', '64637542b81f7'),
(513, '646c702fae97c', '1', '646c702fb41a4'),
(514, '646c702fae97c', '2', '646c702fb42ac'),
(515, '646c702fae97c', '3', '646c702fb42ad'),
(516, '646c702fae97c', '4', '646c702fb42ae'),
(517, '646c702fc0383', '1', '646c702fc1875'),
(518, '646c702fc0383', '2', '646c702fc187c'),
(519, '646c702fc0383', '3', '646c702fc187d'),
(520, '646c702fc0383', '4', '646c702fc187e'),
(521, '646c7608d9897', '1', '646c7608db421'),
(522, '646c7608d9897', '2', '646c7608db428'),
(523, '646c7608d9897', '3', '646c7608db429'),
(524, '646c7608d9897', '0', '646c7608db42a'),
(525, '646c7608e1056', '1', '646c7608e1f96'),
(526, '646c7608e1056', '2', '646c7608e1f9f'),
(527, '646c7608e1056', '0', '646c7608e1fa0'),
(528, '646c7608e1056', '3', '646c7608e1fa1'),
(529, '646f07dd5572a', 'sendo', '646f07dd58c4a'),
(530, '646f07dd5572a', 'arren', '646f07dd58c4e'),
(531, '646f07dd5572a', 'kaykay', '646f07dd58c4f'),
(532, '646f07dd5572a', 'di ako si ericka', '646f07dd58c50'),
(533, '646f07dd658d2', 'nichole1', '646f07dd67911'),
(534, '646f07dd658d2', 'nichole2', '646f07dd67916'),
(535, '646f07dd658d2', 'nichole3', '646f07dd67917'),
(536, '646f07dd658d2', 'all the above', '646f07dd67918');

-- --------------------------------------------------------

--
-- Table structure for table `optionslaspinas`
--

CREATE TABLE `optionslaspinas` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `optionslaspinas`
--

INSERT INTO `optionslaspinas` (`id`, `qid`, `option`, `optionid`) VALUES
(1, '65390a447de98', '1', '65390a447ee00'),
(2, '65390a447de98', '2', '65390a447ee05'),
(3, '65390a447de98', '3', '65390a447ee06'),
(4, '65390a447de98', '4', '65390a447ee07'),
(5, '65390a44864f4', '1', '65390a448785c'),
(6, '65390a44864f4', '2', '65390a4487862'),
(7, '65390a44864f4', '3', '65390a4487863'),
(8, '65390a44864f4', '4', '65390a4487864'),
(9, '65390ba26db81', '1', '65390ba26fcfb'),
(10, '65390ba26db81', '1', '65390ba26fd00'),
(11, '65390ba26db81', '1', '65390ba26fd01'),
(12, '65390ba26db81', '1', '65390ba26fd02'),
(13, '65390ba279c1e', '1', '65390ba27ac36'),
(14, '65390ba279c1e', '2', '65390ba27ac3b'),
(15, '65390ba279c1e', '3', '65390ba27ac3c'),
(16, '65390ba279c1e', '4', '65390ba27ac3d');

-- --------------------------------------------------------

--
-- Table structure for table `optionsnovaliches`
--

CREATE TABLE `optionsnovaliches` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `optionsnovaliches`
--

INSERT INTO `optionsnovaliches` (`id`, `qid`, `option`, `optionid`) VALUES
(1, '645de15785ee0', '1', '645de15786ef8'),
(2, '645de15785ee0', '2', '645de15786f00'),
(3, '645de15785ee0', '3', '645de15786f01'),
(4, '645de15785ee0', '4', '645de15786f02'),
(5, '645de15792eff', '1', '645de157943a8'),
(6, '645de15792eff', '2', '645de157943b1'),
(7, '645de15792eff', '3', '645de157943b2'),
(8, '645de15792eff', '4', '645de157943b3');

-- --------------------------------------------------------

--
-- Table structure for table `optionspila`
--

CREATE TABLE `optionspila` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `optionspila`
--

INSERT INTO `optionspila` (`id`, `qid`, `option`, `optionid`) VALUES
(1, '645df1fd8b38b', '1', '645df1fd8c49e'),
(2, '645df1fd8b38b', '2', '645df1fd8c4a7'),
(3, '645df1fd8b38b', '3', '645df1fd8c4a8'),
(4, '645df1fd8b38b', '4', '645df1fd8c4a9'),
(5, '645df1fd9306f', '1', '645df1fd943f1'),
(6, '645df1fd9306f', '2', '645df1fd943f9'),
(7, '645df1fd9306f', '34', '645df1fd943fb'),
(8, '645df1fd9306f', '4', '645df1fd943fc');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `user_id` int(6) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `District` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `confirm` varchar(100) NOT NULL DEFAULT 'Not_Complete',
  `Learners_userid` int(100) NOT NULL,
  `ADL` varchar(255) NOT NULL,
  `PSA_NSO` varchar(255) NOT NULL,
  `parentconsent` varchar(255) NOT NULL,
  `medicalcerti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_author`, `post_category_id`, `post_title`, `Address`, `District`, `City`, `post_date`, `post_image`, `post_content`, `post_via_time`, `confirm`, `Learners_userid`, `ADL`, `PSA_NSO`, `parentconsent`, `medicalcerti`) VALUES
(64, 0, 'wewe', 8, 'chienlokyut', 'gd', '', '', '2023-10-22', '', 'gds', '', 'Not_Complete', 0, 'gds', 'gds', 'gds', 'gds'),
(66, 0, 'Learners6', 8, 'rex', 'ggwp', '', '', '2023-11-05', '', 'gfsdgds', '', 'Not_Complete', 0, 'wew', 'gds', 'gds', 'gds');

-- --------------------------------------------------------

--
-- Table structure for table `postslaspinas`
--

CREATE TABLE `postslaspinas` (
  `post_id` int(3) NOT NULL,
  `user_id` int(6) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `District` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `confirm` varchar(100) NOT NULL DEFAULT 'Not_Complete',
  `Learners_userid` int(100) NOT NULL,
  `ADL` varchar(255) NOT NULL,
  `PSA_NSO` varchar(255) NOT NULL,
  `parentconsent` varchar(255) NOT NULL,
  `medicalcerti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postslaspinas`
--

INSERT INTO `postslaspinas` (`post_id`, `user_id`, `post_author`, `post_category_id`, `post_title`, `Address`, `District`, `City`, `post_date`, `post_image`, `post_content`, `post_via_time`, `confirm`, `Learners_userid`, `ADL`, `PSA_NSO`, `parentconsent`, `medicalcerti`) VALUES
(3, 3, 'Hh', 8, 'chienskie', 'gd', 'abra', 'bucay', '2023-05-03', '', 'gdgds', '', 'Not_Complete', 0, '', '', '', ''),
(4, 0, 'wew', 5, 'chienlo', 'fsdgs', '', '', '2023-05-16', '', 'gds', '', 'Complete', 0, 'wew', 'tr', 'fsa', 'gds');

-- --------------------------------------------------------

--
-- Table structure for table `postsnovaliches`
--

CREATE TABLE `postsnovaliches` (
  `post_id` int(3) NOT NULL,
  `user_id` int(6) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `confirm` varchar(100) NOT NULL DEFAULT 'Not_Complete',
  `Learners_userid` int(100) NOT NULL,
  `ADL` varchar(255) NOT NULL,
  `PSA_NSO` varchar(255) NOT NULL,
  `parentconsent` varchar(255) NOT NULL,
  `medicalcerti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postsnovaliches`
--

INSERT INTO `postsnovaliches` (`post_id`, `user_id`, `post_author`, `post_category_id`, `post_title`, `Address`, `District`, `City`, `post_date`, `post_image`, `post_content`, `post_via_time`, `confirm`, `Learners_userid`, `ADL`, `PSA_NSO`, `parentconsent`, `medicalcerti`) VALUES
(14, 0, 'gg', 8, 'chienskie', 'gds', '', '', '2023-05-16', '', 'gds', '', 'Complete', 0, 'gds', 'gds', 'gds', 'gds'),
(16, 0, 'chienlo', 2, 'chienlokyut', 'blk37', '', '', '2023-10-31', '', 'gds', '', 'Not_Complete', 0, 'gds', 'gds', 'gds', 'gds');

-- --------------------------------------------------------

--
-- Table structure for table `postspila`
--

CREATE TABLE `postspila` (
  `post_id` int(3) NOT NULL,
  `user_id` int(6) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `confirm` varchar(100) NOT NULL DEFAULT 'Not_Complete',
  `Learners_userid` int(100) NOT NULL,
  `ADL` varchar(255) NOT NULL,
  `PSA_NSO` varchar(255) NOT NULL,
  `parentconsent` varchar(255) NOT NULL,
  `medicalcerti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postspila`
--

INSERT INTO `postspila` (`post_id`, `user_id`, `post_author`, `post_category_id`, `post_title`, `Address`, `District`, `City`, `post_date`, `post_image`, `post_content`, `post_via_time`, `confirm`, `Learners_userid`, `ADL`, `PSA_NSO`, `parentconsent`, `medicalcerti`) VALUES
(2, 2, 'ken', 2, 'Learners10', 'blk37', 'abra', 'bucay', '2023-05-03', '', 'gfsdg', '', 'Complete', 0, '', '', '', ''),
(3, 0, 'user', 1, 'rex', 'ggwp', '', '', '2023-10-03', 'Gp_logo.jpg', 'gdsgds', '', 'Not_Complete', 0, '21', 'tr', 'gds', 'gsd');

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
(24, '645a0a310a297', '645a152ed685d', 'Ano muna ang dapat mong makuha bago ka mag-apply ng  Driver\'s License?\r\nWhat must you acquire before applying for a Driver\'s License?', 4, 1),
(25, '645a0a310a297', '645a152edfca2', 'Ano ang mga konsepto na dapat mong maunawaan bago magmaneho?\r\nWhat are the concwepts that you need to understand before driving?', 4, 2),
(26, '645a0a310a297', '645a152ee6c6a', 'Ano ang dalawang  uri ng lisensya?\r\nWhat are the types of licenses?', 4, 3),
(27, '645a0a310a297', '645a152eee6bc', 'Ang pagmamaneho ba ay isang karapatan (right) o pribilehiyo (privilege)?\r\nIs Driving a right or a privilege?', 4, 4),
(28, '645a0a310a297', '645a152f00f8f', 'Ayon sa Republic Act No. 10930, hanggat walang traffic violation ang isang driver,maaari siyang bigyan ng hanggang sampung taon ng kanyang pag-renew ng lisensya. Ano ang ibang titulo para  sa RA 10930? According to Republic Act No.10930, as long as a driver does not have a traffic violation, s/he can be granted up to ten years of his license upon renewal', 4, 5),
(29, '645a0a310a297', '645a152f07a2d', 'Ang tanging responsibilidad ng isang driver ay ang kanyang kaligtasan.Tama o Mali?\r\nThe only responsibility of a driver is his safety. True or False?', 4, 6),
(30, '645a0a310a297', '645a152f0f7e4', 'Hindi kailangan ang Road Courtesy kung magmamaneho. Tama o mali?\r\nRoad Courtesy is not required when driving. True or False?', 4, 7),
(31, '645a0a310a297', '645a152f172fc', 'Kung mas mahaba ang validity ng driver\'s license, nangangahulugan din ito na mas malaki ang responsibilidad ng pagmamaneho sa kalsada.\r\nIf the  validity of a driver\'s licenseis longer, it also means that the responsibility of driving on the  road is much greater.', 4, 8),
(32, '645a0a310a297', '645a152f1ef01', 'Bago magkaroon ng student permit at driver\'s license,kailangan mayroon kang sapat na kaalaman pagdating sa pagmamaneho. Tama o Mali?\r\nBefore getting a student permit and driver\'s license, you need to have sufficient knowledge when it comes to driving.True or False?', 4, 9),
(33, '645a0a310a297', '645a152f26750', 'Bago makakuha ng student permit,kailangang makakumpleto muna ang aplikante ng ilang oras na theoretical training?\r\nBefore getting a student permit, one must complete how many hours of theoretical training?', 4, 10),
(34, '645a0a310a297', '645a152f2d43d', 'Bonus 1+1=?', 4, 11),
(41, '645a31fbd886f', '645a3b0d720a0', 'Hindi maiiwasan ang mga Road Crash.Tama o Mali?\r\nRoad crashes cannot be avoided.True or False?', 4, 1),
(42, '645a31fbd886f', '645a3b0d79a34', 'Anong taon nagsimula ang LTO ito din ang taon na inilabas ang Legislative Act 2159 upang mabuo ang Automobile Section.\r\nWhat year marked the beginning of LTO? This was also the year when Legislative Act 2159 was released to create the Automobile Section.', 4, 2),
(43, '645a31fbd886f', '645a3b0d81217', 'Anong posisyon ang nasa pinakamataas ng organisasyon ng Land Transportation Office?\r\nWhat position heads the Land Transportation Office as an organization?', 4, 3),
(44, '645a31fbd886f', '645a3b0d894ac', 'Rationalize the land transport services and facilities to effectively implement the various land transportation laws,rules and regulations\"\r\nAng salaysay na ito ay ang kinikilalang_ng LTO?\r\n\"Rationalize the land transport services and facilities to effectively implement the various land transportation laws, rules and regulations\"In LT,what is the statement called?', 4, 4),
(45, '645a31fbd886f', '645a3b0d933a1', 'kailan opisyal na kinilala ang organisasyon ng transportasyon bilang LTO?\r\nWhen was the government\'s transportation agency officially recognized as LTO?', 4, 5),
(46, '645a31fbd886f', '645a3b0d994a2', 'Ang mga sumusunod ay mandato ng LTO maliban sa isa.Ano ito?\r\nThe Following are mandates of LTO,Except:', 4, 6),
(47, '645a31fbd886f', '645a3b0d9f41a', 'Ayon sa isang road safety NGO,magkano ang nawawala sa pilipinas dahil sa road crashes?\r\nAccording to a road safety NGO,How much does the phillipines lose because of road creashes?', 4, 7),
(48, '645a31fbd886f', '645a3b0da52cc', 'Bago makilala ang Land Transaction Office bilang LTO, ano ang opisyal na pangalan nito noong 1985 ayon sa Executive Order 1011?\r\nBefore it was known as the Land Transportation Office,what was LTO called during 1985 according to Executive Order 1011?', 4, 8),
(49, '645a31fbd886f', '645a3b0dab0a4', 'A frontline agency showcasing fast and efficient public service for a progressive land transport sector\".Ang salaysay na ito ay ang kinikilalang_ ng LTO?\r\nA Frontline agency showcasing fast and efficient public service for a progressive land transport sector\"In LTO, what is the statement called?', 4, 9),
(50, '645a31fbd886f', '645a3b0dafeb7', 'Ang _ay ang organisasyong responsable para sa mga pampublikong sasakyan.\r\nThe _is the organization responsible for public vehicles.', 4, 10),
(51, '645a3c0582199', '645a46ecbf543', 'Sino pa ang road user na binibigyan ng lisensya ayon sa dalawang uri nito sa ilalimng LTO?\r\nWho else is issued with a license according to the two kinds of licenses under LTO?', 4, 1),
(52, '645a3c0582199', '645a46ecc6e0d', 'Sino ang dapat kasama ng isang student driver habang nag-aaral siya na magmaneho?\r\nwho should accompany as student driver while s/she is learnning how to drive?', 4, 2),
(53, '645a3c0582199', '645a46eccd790', 'Ayon sa LTO, \"the license must be carried at all times when operating a motor vehicle and shall be shown and/or surrendered for cause upon demand to any person with authority under this Act to confiscate the same.\"\r\nAccording to the LTO,\"the license must be carried at all times when operating a motor vehicle and shall be shown and/or surrendered for cause upon demand to any person with authority under this Act to confiscate the same.\"', 4, 3),
(54, '645a3c0582199', '645a46ecd5a88', 'Upang makakuha ng student permit, ikaw ay dapat na:_taong gulang o masmatanda.\r\nTo get a student permit, you must be:_years old or older.', 4, 4),
(55, '645a3c0582199', '645a46ecdd189', 'Ilan ang driver\'s license codes ng LTO?\r\nHow many Driver\'s License codes does LTO have for license?', 4, 5),
(56, '645a3c0582199', '645a46ece543c', 'Nakasaad sa \'Section 27:Authority to Suspend,Revoke and Reinstate Driver\'s license,\'ang direktor ng LTO ay may kapangyarihan na suspindihin o bawiin ang lisensya kung ang driver ay nakagawa ng malubhang pagkakasala o isang serious offense', 4, 6),
(57, '645a3c0582199', '645a46ecead4e', 'Anong dokumento ang binibigay sa isang student driver para mag-aral at magpractice ng pagmaneho?\r\nwhat document is given to a student driver that allows him or her to learn and practice driving?', 4, 7),
(58, '645a3c0582199', '645a46ecf19ba', 'Sa demerit point system, ilang demerits ang magreresulta sa pagkakakumpiska ng lisensya sa loob ng dalawang taon o mahigpit?\r\nIn the demerit point system, how many demerit point will result in the confiscation of the drivers license for at least two years?', 4, 8),
(59, '645a3c0582199', '645a46ed03d59', 'Sino ang dapat kasama ng isang student driver habang nag-aaral siya na magmaneho', 4, 9),
(60, '645a3c0582199', '645a46ed0908b', 'Tanging mga deputized agent lang ng LTO ang may karapatang kumpiskahin ang lisensya.Hindi ito maaaring kunin ng mga LGU o Local Government Units, o iba pang organisasyong hindi deputized ng LTO.', 4, 10),
(61, '645a3c0582199', '645a46ed0ebd7', 'Gaano katagal maaring magmaneho ang isang turista sa pilipinas gamit ang kanyang pambanyagang lisensya bago ito bigyan ng mandato na gumamit ng lisensya galing sa LTO?', 4, 11),
(62, '645ca0407806c', '645ca05a168e8', '1+1', 4, 1),
(63, '645ca0407806c', '645ca05a23a81', '2+2', 4, 2),
(86, '646078d223294', '6460881ba27c9', 'Sino pa ang road user na binigyan ng lisensya ayon sa dalawang uri nito sa ilalim ng LTO?\r\nWho else is issued with a license according to the two kinds of licenses under LTO?', 4, 1),
(87, '646078d223294', '6460881baa0f0', 'Sino ang dapat kasama ng isang student  driver habang nag-aaral siya na magmaneho?\r\nWho should accompany a student driver while s/he is learning how to drive?', 4, 2),
(88, '646078d223294', '6460881bb5950', 'Ayon sa LTO,\"the license must be carried at all times when operating a motor vehicle and shall be shown and/or surendered for cause upon demand to any person with authoriy under this Act to confiscate the same,\"', 4, 3),
(89, '646078d223294', '6460881bbba15', 'Upang makakuha ng student permit,ikaw ay dapat na:_taong gulang o mas matanda.\r\nTo get a student permit , you must be:_years old or older.', 4, 4),
(90, '646078d223294', '6460881bc19b7', 'Ilan ang Driver\'s license codes ng LTO?\r\nHow many Driver\'s License codes does LTO have for licenses?', 4, 5),
(91, '646078d223294', '6460881bc8c89', 'Nakasaad sa \'Section 27:Authority to Suspend,Revoke and Reinstake Driver\'s License,\'ang Direktor ng LTO ay may kapangyarihan na suspindihin o bawiin ang lisensya kung ang driver ay nakagawa ng malubhang pagkakasala o isang serious offense.', 4, 6),
(92, '646078d223294', '6460881bcf812', 'Anong dokumento ang binibigay sa isang student driver para mag-aral at magpractice ng pagmaneho?\r\nWhat document is given to a student driver that allows him or her to learn and practice driving?', 4, 7),
(93, '646078d223294', '6460881bd56ed', 'Sa Demerit point system,ilang demerits ang magreresulta sa pagkakakumpiska ng lisensya sa loob ng dalawang taon o mahigpit?', 4, 8),
(94, '646078d223294', '6460881bdc495', 'Sino ang dapat kasama ng isang student driver habang nag-aaral siya na magmaneho? ', 4, 9),
(95, '646078d223294', '6460881be3114', 'Tanging mga deputized agent lang ng LTO ang may karapatang kumpiskahin ang lisensya.Hindi ito maaaring kunin ng mga LGU o Local Government Units,o iba pang organisasyong hindi deputized ng LTO.', 4, 10),
(96, '646078d223294', '6460881beaabc', 'Gaano katagal maaring magmaneho ang isang turista sa Pilipinas gamit ang kanyang pambayagang lisensya bago ito bigyan ng mandato na gumamit ng lisensya galing sa LTO?', 4, 11),
(107, '64608cf3cc86b', '646099d309bb4', 'Ito ang kulay at kondisyon ng traffic light na nagsasabing huminto ka bago dumating sa intersection.Ano ito?', 4, 1),
(108, '64608cf3cc86b', '646099d312041', 'punan ang patlang: Ang ibig sabihin ng flashing yellow light ay_\r\nFill in the blanks;A flashing yellow light means_', 4, 2),
(109, '64608cf3cc86b', '646099d31f8fa', 'Ito ay ang kulay at kondisyon ng traffic light na senyales na maaari ka ng umabante kung \"clear\" na o wala nang sagabal sa intesection.Ano ito?', 4, 3),
(110, '64608cf3cc86b', '646099d327394', 'Ano ang ibig sabihin ng steady red light sa isang intersection?\r\nWhat does a steady red light mean at an intersection?', 4, 4),
(111, '64608cf3cc86b', '646099d32cf72', 'Ano ang traffic light signal na nagsasabing dapat ka nang huminto?', 4, 5),
(112, '64608cf3cc86b', '646099d3321ec', 'Nangyayari ang road rage kapag ang isang motorista ay nagpapakita ng agresibong pag-uugali sa ibang mga driver na maaaring delikado sa mga tao.Tama o Mali?', 4, 6),
(113, '64608cf3cc86b', '646099d33a03d', 'Kapag ang flashing yellow light ay may kasamang overhead beacon na matatagpuan mismo sa itaas ng isang warning sign, pinapayuhan ka nitong magpatuloy nang may pagiingat.Tama o Mali?', 4, 7),
(114, '64608cf3cc86b', '646099d340ae8', 'Punan ang patlang;Ang hindi pagpansin at pagsunod sa traffic lights ay maaring_', 4, 8),
(115, '64608cf3cc86b', '646099d347c20', 'Kung pula ang kulay ng traffic light, ano ang ibig sabihin nito sa mga tatawid na pedestrian?', 4, 9),
(116, '64608cf3cc86b', '646099d34d5e4', 'Punan ang patlang:Ang ibig sabihin ng green light sa intersection para sa mga pedestrian ay_', 4, 10),
(117, '64609b28d289a', '6460a21b9c2f6', 'Ano ang gagawin kapag ang isang electrical accessory ng iyong sasakyan ay hindi gumagana?', 4, 1),
(118, '64609b28d289a', '6460a21ba44ec', 'Ang mga sumusunod ay makakatulong alagaan ang baterya ng iyong sasakyan,maliban sa?', 4, 2),
(119, '64609b28d289a', '6460a21baba63', 'Alin sa mga sumusunod ng isang halimbawa ng proactive maintenance?', 4, 3),
(120, '64609b28d289a', '6460a21bb28db', 'Alin sa BLOWGADGETS ang nakapagbibigay ito ng lubrication,para sa smooth at maayos na takbo ng makina?', 4, 4),
(121, '64609b28d289a', '6460a21bb9ede', 'Ang S sa BLOWBAGETS ay kumakatawan sa Self o Sarili.Samakatuwid,ang driver ay dapat na physically at mentally fit.Tama o Mali?', 4, 5),
(122, '64609b28d289a', '6460a21bc11c5', 'Alin sa mga sumusunod ang iniiwasan ang sobrang-init ng makina o engine everheating?', 4, 6),
(123, '64609b28d289a', '6460a21bc781f', 'Alin sa BLOBADGETS ay tumutukoy sa inflation at kondisyon ng mga gulong ng sasakyan?', 4, 7),
(124, '64609b28d289a', '6460a21bcd243', 'kahit nagmamadali,kailangan parin na magsagawa ng pre-trip check-up.Tama o Mali?', 4, 8),
(125, '64609b28d289a', '6460a21bd4cc7', 'Ano ang tamang termino para sa kakayahan ng isang sasakyan na nasa suitable operating condition para sa ligtas na pagmamaneho,at transportasyon ng mga tao, kargamento, o bagahe sa mga kalsada o lansangan?', 4, 9),
(126, '64609b28d289a', '6460a21bdcff5', 'Ang BLOWBADGETS ay kumakatawan sa:', 4, 10),
(127, '646375231a2be', '64637542ae247', '2-2', 4, 1),
(128, '646375231a2be', '64637542b70ba', '7-1', 4, 2),
(129, '646c701c7ee2e', '646c702fae97c', '1+1', 4, 1),
(130, '646c701c7ee2e', '646c702fc0383', '2+2', 4, 2),
(131, '646c75c2caf95', '646c7608d9897', '1-1', 4, 1),
(132, '646c75c2caf95', '646c7608e1056', '2-2', 4, 2),
(133, '646f07876d579', '646f07dd5572a', 'sino si ericka', 4, 1),
(134, '646f07876d579', '646f07dd658d2', 'sino vbestie ni ericka', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questionslaspinas`
--

CREATE TABLE `questionslaspinas` (
  `id` int(11) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionslaspinas`
--

INSERT INTO `questionslaspinas` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(1, '65390a217fba5', '65390a447de98', '1 +1=?', 4, 1),
(2, '65390a217fba5', '65390a44864f4', '2+2 =?', 4, 2),
(3, '65390b94e9488', '65390ba26db81', '2', 4, 1),
(4, '65390b94e9488', '65390ba279c1e', '2', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questionsnovaliches`
--

CREATE TABLE `questionsnovaliches` (
  `id` int(11) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionsnovaliches`
--

INSERT INTO `questionsnovaliches` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(1, '645de144713d1', '645de15785ee0', '1+1', 4, 1),
(2, '645de144713d1', '645de15792eff', '2+2', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questionspila`
--

CREATE TABLE `questionspila` (
  `id` int(11) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionspila`
--

INSERT INTO `questionspila` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(1, '645df1e80f5ee', '645df1fd8b38b', '1+1', 4, 1),
(2, '645df1e80f5ee', '645df1fd9306f', '2+2', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(11, '645a0a310a297', 'Quiz1', 1, 1, 10, 60, '2023-05-11 08:16:00', 'disabled'),
(15, '645a31fbd886f', 'Quiz2', 1, 1, 10, 60, '2023-05-11 08:16:11', 'disabled'),
(16, '645a3c0582199', 'Quiz3', 1, 1, 11, 60, '2023-05-11 08:16:21', 'disabled'),
(17, '645ca0407806c', 'Add', 1, 1, 2, 1, '2023-10-30 10:55:48', 'enabled'),
(20, '646078d223294', 'Quiz4', 1, 1, 11, 60, '0000-00-00 00:00:00', 'disabled'),
(22, '64608cf3cc86b', 'Video Lecture 1 (module 2)(quiz1)', 1, 1, 10, 60, '0000-00-00 00:00:00', 'disabled'),
(23, '64609b28d289a', 'Video Lecture 1 (module 2)/video Lecture 2(quiz 2)', 1, 1, 10, 60, '0000-00-00 00:00:00', 'disabled'),
(24, '646375231a2be', 'Minus', 1, 1, 2, 10, '2023-05-16 12:21:28', 'enabled'),
(25, '646c701c7ee2e', 'Addition1', 1, 1, 2, 1, '2023-05-23 07:50:11', 'enabled'),
(26, '646c75c2caf95', 'Gg', 1, 1, 2, 60, '2023-05-23 08:15:08', 'enabled'),
(27, '646f07876d579', 'Ano Pangalan Ko', 1, 1, 2, 1, '2023-10-30 10:03:03', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `quizlaspinas`
--

CREATE TABLE `quizlaspinas` (
  `id` int(11) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizlaspinas`
--

INSERT INTO `quizlaspinas` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(1, '65390a217fba5', 'Addition', 2, 2, 2, 2, '2023-10-30 10:55:21', 'enabled'),
(2, '65390b94e9488', 'Quiz4', 2, 1, 2, 2, '0000-00-00 00:00:00', 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `quiznovaliches`
--

CREATE TABLE `quiznovaliches` (
  `id` int(11) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiznovaliches`
--

INSERT INTO `quiznovaliches` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(1, '645de144713d1', 'Add', 1, 1, 2, 1, '2023-10-30 11:06:57', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `quizpila`
--

CREATE TABLE `quizpila` (
  `id` int(11) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `correct` int(255) NOT NULL,
  `wrong` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizpila`
--

INSERT INTO `quizpila` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(1, '645df1e80f5ee', 'Wew', 1, 1, 2, 1, '2023-10-31 16:27:17', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`) VALUES
(4, 'rex', 9, '2023-05-11 08:19:18'),
(5, 'arren', 0, '2023-05-08 09:41:18'),
(6, 'chienlo', 0, '2023-06-22 11:41:36'),
(7, 'ericka', 6, '2023-05-25 07:10:12'),
(8, 'user', 0, '2023-10-25 11:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `ranklaspinas`
--

CREATE TABLE `ranklaspinas` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ranknovaliches`
--

CREATE TABLE `ranknovaliches` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `score` int(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ranknovaliches`
--

INSERT INTO `ranknovaliches` (`id`, `username`, `score`, `time`) VALUES
(1, 'chienlo', -2, '2023-05-12 06:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `rankpila`
--

CREATE TABLE `rankpila` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rankpila`
--

INSERT INTO `rankpila` (`id`, `username`, `score`, `time`) VALUES
(1, 'wew', -4, '2023-05-12 08:02:32'),
(2, 'user', 0, '2023-10-30 12:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `p_p` varchar(255) DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `p_p`, `last_seen`) VALUES
(1, 'admin', 'admin', '$2y$10$x7MDhF9pMmffVqf7dkdlA.JUexQAJktl6zCyPMyx7bVV0uHSylGti', 'user-default.png', '2023-05-25 14:58:00'),
(2, 'chienlo', 'chienlo', '$2y$10$fFkwMrQJ.x5uYS3MdJWx4epq0R.orBMeqBVeoDvzBSoi4MVSfEViy', 'user-default.png', '2023-05-25 14:57:43'),
(3, 'arren', 'arren', '$2y$10$T2yttPc4RLwQg3kBKpMpqOJlb6YrsAvss910x0TQNxBbUWDYZ.5fm', 'user-default.png', '2023-05-23 16:18:40'),
(4, 'joshua', 'joshua', '$2y$10$D.GAPOj9hhtfEK0pEqXg/uPPUNRM3i1QDLz3QgNbqpZl8bD6NxUEK', 'user-default.png', '2023-05-16 20:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `usersadmin`
--

CREATE TABLE `usersadmin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersadmin`
--

INSERT INTO `usersadmin` (`user_id`, `username`, `password`, `name`, `user_lastname`, `email`, `user_phoneno`, `user_image`, `user_role`) VALUES
(1, 'admin', '123', 'chienlo', 'mejmia', 'wew@gmail.com', '241242', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `userschatlaspinas`
--

CREATE TABLE `userschatlaspinas` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `p_p` varchar(255) DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userschatlaspinas`
--

INSERT INTO `userschatlaspinas` (`user_id`, `name`, `username`, `password`, `p_p`, `last_seen`) VALUES
(1, 'admin', 'admin', '$2y$10$sXyZSppOFOJ/8ue.5t.WLeAcUEDygS4o0Ax5N7R1xbuE9iW9kFjm.', 'user-default.png', '2023-11-02 00:44:51'),
(2, 'chienlo', 'chienlo', '$2y$10$9mt70bLBp02waCaprFoYCOzrJLKXEZvHqh/J3VNHJR1RbprLa/9DC', 'user-default.png', '2023-11-02 00:46:07'),
(3, 'gg', 'gg', '$2y$10$jyJpWRBwBNmk5/V9fYELCuWGz4FHoxYf0ihHveY3PyXZMm6KqHJyS', 'user-default.png', '2023-11-02 01:36:15'),
(4, 'rex', 'rex', '$2y$10$DW8WI5LWOUO3EmdGe7ysyefL03sCOO1IZbzhQKy4QB1J3B6CNduuK', 'user-default.png', '2023-11-02 00:47:48'),
(5, 'wew', '123', '$2y$10$ePCbutNKSirNy5s1lZqClu6xHyILCwkmsMsIuflVlreGQmft6jh.6', 'user-default.png', '2023-11-02 00:40:46'),
(6, 'Chienlo', 'wtf', '$2y$10$0vp3kCQTNwo.VCodHkFn7O3MQF41ZUfV4uC60sNOhTlkGs51CQ9oS', 'user-default.png', '2023-11-02 00:45:15'),
(7, 'wew', 'chichi', '$2y$10$O/lp2Zb.uuPoCrmmG1u1yOy0xnSrR3xISzZ1M/gcold7ItSdwHKwy', 'user-default.png', '2023-11-02 01:10:36'),
(8, 'king', 'yyy', '$2y$10$Q1bcYCWr7dandS8Kx6I/1eCZxXTdv6LZ22yzsKt32hCfFaCkCXYnK', 'user-default.png', '2023-11-02 01:12:45'),
(9, 'Chienlo Joseph Mejia', 'user123', '$2y$10$0ScjYl9efVM7pYkGpZVhC.6/jQkaSqalrLaWY9KRksib7AvVr3dw2', 'user-default.png', '2023-11-02 01:14:02'),
(10, 'addition', 'chienlowew123', '$2y$10$fO4BysMHITXStU/BvJAV1uNWbzOnZBd08FU4GDtGpPOJ7KoANZFSa', 'user-default.png', '2023-11-02 01:18:59'),
(11, 'Quiz4123', 'chiens', '$2y$10$SZaxeeNnuc7jljoRUj3aeO2guYyzOYMeqqsuRDaIQZ/Xoc6BcKKYy', 'user-default.png', '2023-11-02 01:22:16'),
(12, 'wewwsw', 'wew123', '$2y$10$3W2X.FXMJA2Ssk8.osTygecCxLDhOywe7ENvh9CrbVg6d.6vywTAi', 'user-default.png', '2023-11-02 01:23:27'),
(13, 'jamesread123', 'james', '123', 'user-default.png', '2023-11-02 01:45:56'),
(14, 'Chienlo', 'kkk', '123', 'user-default.png', '2023-11-02 01:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `userschatnovaliches`
--

CREATE TABLE `userschatnovaliches` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `p_p` varchar(255) DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userschatnovaliches`
--

INSERT INTO `userschatnovaliches` (`user_id`, `name`, `username`, `password`, `p_p`, `last_seen`) VALUES
(1, 'admin', 'admin', '$2y$10$cpD4jZEFaPeNAdldl7jO.eQJ2l/ochsdwijnNiwpUcs6eCDw/uK0O', 'user-default.png', '2023-05-22 02:38:09'),
(2, 'chienlo', 'chienlo', '$2y$10$Ipxi8j7p0LbvlysIESznqOHfVK.93Sa9snN9lJBX1SBLAtZTXATu6', 'user-default.png', '2023-05-12 18:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `userschatpila`
--

CREATE TABLE `userschatpila` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `p_p` varchar(255) DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userschatpila`
--

INSERT INTO `userschatpila` (`user_id`, `name`, `username`, `password`, `p_p`, `last_seen`) VALUES
(1, 'admin', 'admin', '$2y$10$ImNN35k5BLWmE08TBxX6K.TWsK/kc6AhIffe1DClwyPydT00NFoJC', 'user-default.png', '2023-05-12 19:01:57'),
(2, 'chienlo', 'chienlo', '$2y$10$Rh1jvwEGDB7Ut3QeliHp7OTVKOg3GSLgOaIkO4cgYpM0Wlk1Vmve6', 'user-default.png', '2023-05-12 19:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `userslaspinas`
--

CREATE TABLE `userslaspinas` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `payment` int(255) NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `paycourse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userslaspinas`
--

INSERT INTO `userslaspinas` (`user_id`, `username`, `password`, `name`, `user_lastname`, `email`, `user_phoneno`, `user_image`, `user_role`, `payment`, `type`, `status`, `date`, `paycourse`) VALUES
(2, 'admin', '123', 'wew', '', 'wtf@gmail.com', '3232132', '', 'Admin', 0, '', 'read', '2023-10-22 09:38:15', ''),
(8, 'user', '123', 'Chienlo', '', 'wew@gmail.com', '09662733608423', 'user_default.jpg', 'Enroll', 0, 'comment', 'read', '2023-11-02 21:17:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `usersmarikina`
--

CREATE TABLE `usersmarikina` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `payment` int(255) NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `paycourse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersmarikina`
--

INSERT INTO `usersmarikina` (`user_id`, `username`, `password`, `name`, `user_lastname`, `email`, `user_phoneno`, `user_image`, `user_role`, `payment`, `type`, `status`, `date`, `paycourse`) VALUES
(1, 'admin', '123', 'Chienlokyut', '', 'wew@gmail.com', '242142', 'user_default.jpg', 'Admin', 0, '', 'read', '2023-10-22 09:37:32', ''),
(16, 'james', '123', 'potter', '', 'roll@gmail.com', '096627336082', 'gcash.png', 'Enroll', 0, 'comment', 'read', '2023-11-02 13:29:52', ''),
(18, 'james', '123', 'johny ', 'sins', 'a@yahoo.com', '0966273233608', 'gcash.png', '', 0, 'comment', 'unread', '2023-11-04 23:35:29', ''),
(22, 'ivan', '123', 'Chienlo', 'Mejia', 'a@yahoo.com', '09662733608', 'gcash.png', 'Enroll', 0, 'comment', 'unread', '2023-11-05 01:11:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `usersnovaliches`
--

CREATE TABLE `usersnovaliches` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `payment` int(255) NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `paycourse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersnovaliches`
--

INSERT INTO `usersnovaliches` (`user_id`, `username`, `password`, `name`, `user_lastname`, `email`, `user_phoneno`, `user_image`, `user_role`, `payment`, `type`, `status`, `date`, `paycourse`) VALUES
(5, 'admin', '123', 'chienlo', 'mejia', '123@gmail.com', '32532', 'user_default.jpg', 'Admin', 12, '', '', '2023-10-22 09:39:36', ''),
(8, 'ivan', '123', 'addition', '', 'a@gmail.com', '09662733608', 'user_default.jpg', 'Enroll', 0, 'comment', 'unread', '2023-11-05 02:49:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `userspila`
--

CREATE TABLE `userspila` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `payment` int(255) NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `paycourse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userspila`
--

INSERT INTO `userspila` (`user_id`, `username`, `password`, `name`, `user_lastname`, `email`, `user_phoneno`, `user_image`, `user_role`, `payment`, `type`, `status`, `date`, `paycourse`) VALUES
(1, 'admin', '123', 'gds', 'gds', '123@gmail.com', '342423', '', 'Admin', 0, '', '', '2023-10-22 09:40:41', '');

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
(35, '64584351aaae0', '64584351ad3a6', '64584351ad3a7', '6458434346b9c', 'arren'),
(38, '645918b64efb6', '645918b6505ef', '645918b6505ef', '645918a09a519', 'rex'),
(39, '645918b6576dd', '645918b658675', '645918b658675', '645918a09a519', 'rex'),
(41, '64591b25690a5', '64591b2569f2c', '64591b2569f2c', '64591b1460e10', 'rex'),
(43, '645a17b5a337e', '645a17b5a422d', '645a17b5a422d', '645a179e64e37', 'rex'),
(44, '645a24854950c', '645a24854a64e', '645a24854a64e', '645a246e9747f', 'rex'),
(45, '645a248550a8f', '645a248551a05', '645a248551a05', '645a246e9747f', 'rex'),
(46, '645a17b59c292', '645a17b59decf', '645a17b59decf', '645a179e64e37', 'rex'),
(47, '645a2d9eeb710', '645a2d9eed448', '645a2d9eed448', '645a2d8f13867', 'rex'),
(48, '645a2d9f011ac', '645a2d9f03332', '645a2d9f03332', '645a2d8f13867', 'rex'),
(49, '645ca05a168e8', '645ca05a199f9', '645ca05a19a00', '645ca0407806c', 'rex'),
(50, '645ca05a23a81', '645ca05a256ea', '645ca05a256eb', '645ca0407806c', 'rex'),
(51, '645ca05a168e8', '645ca05a19a00', '645ca05a19a00', '645ca0407806c', 'chienlo'),
(52, '645ca05a23a81', '645ca05a256e9', '645ca05a256eb', '645ca0407806c', 'chienlo'),
(53, '64637542ae247', '64637542af87f', '64637542af880', '646375231a2be', 'chienlo'),
(54, '64637542b70ba', '64637542b81f6', '64637542b81f6', '646375231a2be', 'chienlo'),
(55, '646c702fae97c', '646c702fb41a4', '646c702fb42ac', '646c701c7ee2e', 'chienlo'),
(56, '646c702fc0383', '646c702fc187e', '646c702fc187e', '646c701c7ee2e', 'chienlo'),
(57, '646c7608d9897', '646c7608db428', '646c7608db42a', '646c75c2caf95', 'chienlo'),
(58, '646c7608e1056', '646c7608e1fa0', '646c7608e1fa0', '646c75c2caf95', 'chienlo'),
(59, '646f07dd5572a', '646f07dd58c4f', '646f07dd58c4f', '646f07876d579', 'chienlo'),
(60, '646f07dd658d2', '646f07dd67918', '646f07dd67918', '646f07876d579', 'chienlo'),
(61, '646f07dd5572a', '646f07dd58c4f', '646f07dd58c4f', '646f07876d579', 'ericka'),
(62, '646f07dd658d2', '646f07dd67918', '646f07dd67918', '646f07876d579', 'ericka'),
(63, '646c7608d9897', '646c7608db42a', '646c7608db42a', '646c75c2caf95', 'ericka'),
(64, '646c7608e1056', '646c7608e1fa0', '646c7608e1fa0', '646c75c2caf95', 'ericka'),
(65, '646c702fae97c', '646c702fb42ac', '646c702fb42ac', '646c701c7ee2e', 'ericka'),
(66, '646c702fc0383', '646c702fc187e', '646c702fc187e', '646c701c7ee2e', 'ericka');

-- --------------------------------------------------------

--
-- Table structure for table `user_answerlaspinas`
--

CREATE TABLE `user_answerlaspinas` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `correctans` varchar(255) NOT NULL,
  `eid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_answernovaliches`
--

CREATE TABLE `user_answernovaliches` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `correctans` varchar(255) NOT NULL,
  `eid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_answernovaliches`
--

INSERT INTO `user_answernovaliches` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '645de15785ee0', '645de15786f01', '645de15786f00', '645de144713d1', 'chienlo'),
(2, '645de15792eff', '645de157943b3', '645de157943b3', '645de144713d1', 'chienlo');

-- --------------------------------------------------------

--
-- Table structure for table `user_answerpila`
--

CREATE TABLE `user_answerpila` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `correctans` varchar(255) NOT NULL,
  `eid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_answerpila`
--

INSERT INTO `user_answerpila` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '645df1fd8b38b', '645df1fd8c4a8', '645df1fd8c4a7', '645df1e80f5ee', 'wew'),
(2, '645df1fd9306f', '645df1fd943f9', '645df1fd943fc', '645df1e80f5ee', 'wew');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `videosname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `location`, `videosname`) VALUES
(14, '202305081683557143', 'video/202305081683557143.mp4', 'VIDEO 1_ DriveSafe PH Online Theoretical Driving Course_ Introduction'),
(15, '202305081683557169', 'video/202305081683557169.mp4', 'VIDEO 2_ Ang Land Transportation Office'),
(16, '202305081683557191', 'video/202305081683557191.mp4', 'VIDEO 3_ Ang Driver’s Licensing System'),
(17, '202305081683557218', 'video/202305081683557218.mp4', 'VIDEO 4_ Ang Motor Vehicle Registration System'),
(18, '202305081683557333', 'video/202305081683557333.mp4', 'VIDEO 21_ Traffic Light at mga Dapat na Pag-uugali sa Kalsada'),
(19, '202305081683557351', 'video/202305081683557351.mp4', 'VIDEO 20_ Module 1_ Recap'),
(20, '202305081683557373', 'video/202305081683557373.mp4', 'VIDEO 29_ Physical _ Mental Wellness ng Driver'),
(21, '202305081683557389', 'video/202305081683557389.mp4', 'VIDEO 28_ Module 2_ Recap'),
(22, '202305081683557415', 'video/202305081683557415.mp4', 'VIDEO 24_ Mga Dahilan ng Road Crashes at Paano ito Maiiwasan (Motor Vehicle Factors)'),
(23, '202305141684047985', 'video/202305141684047985.mp4', 'VIDEO 22_ BLOWBAGETS'),
(24, '202305141684048013', 'video/202305141684048013.mp4', 'VIDEO 23_ Mga Dahilan ng Road Crashes at Paano ito Maiiwasan (Human Factors)'),
(25, '202305141684048038', 'video/202305141684048038.mp4', 'VIDEO 24_ Mga Dahilan ng Road Crashes at Paano ito Maiiwasan (Motor Vehicle Factors)'),
(26, '202305141684048088', 'video/202305141684048088.mp4', 'VIDEO 30_ Mga Responsibilidad ng Driver sa kanyang Pasahero'),
(27, '202305141684048112', 'video/202305141684048112.mp4', 'VIDOE 31_ Mga Karapatan ng driver kung Mahuli ng Enforcer'),
(28, '202305141684048136', 'video/202305141684048136.mp4', 'VIDEO 32_ Land Transportation Related Special Laws (Part 1)'),
(29, '202305141684048173', 'video/202305141684048173.mp4', 'VIDEO 20_ Module 1_ Recap'),
(30, '202305141684048197', 'video/202305141684048197.mp4', 'VIDEO 21_ Traffic Light at mga Dapat na Pag-uugali sa Kalsada'),
(31, '202305141684048232', 'video/202305141684048232.mp4', 'VIDEO 22_ BLOWBAGETS'),
(32, '202305141684048259', 'video/202305141684048259.mp4', 'VIDEO 23_ Mga Dahilan ng Road Crashes at Paano ito Maiiwasan (Human Factors)');

-- --------------------------------------------------------

--
-- Table structure for table `videolaspinas`
--

CREATE TABLE `videolaspinas` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `videosname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videolaspinas`
--

INSERT INTO `videolaspinas` (`video_id`, `video_name`, `location`, `videosname`) VALUES
(1, '202305121683877325', 'video/202305121683877325.mp4', 'wew');

-- --------------------------------------------------------

--
-- Table structure for table `videonovaliches`
--

CREATE TABLE `videonovaliches` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `videosname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videopila`
--

CREATE TABLE `videopila` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `videosname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answerlaspinas`
--
ALTER TABLE `answerlaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answernovaliches`
--
ALTER TABLE `answernovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answerpila`
--
ALTER TABLE `answerpila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `categorieslaspinas`
--
ALTER TABLE `categorieslaspinas`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `categoriesnovaliches`
--
ALTER TABLE `categoriesnovaliches`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `categoriespila`
--
ALTER TABLE `categoriespila`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chatslaspinas`
--
ALTER TABLE `chatslaspinas`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chatsnovaliches`
--
ALTER TABLE `chatsnovaliches`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chatspila`
--
ALTER TABLE `chatspila`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactadmin`
--
ALTER TABLE `contactadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactlaspinas`
--
ALTER TABLE `contactlaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactnovaliches`
--
ALTER TABLE `contactnovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactpila`
--
ALTER TABLE `contactpila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `conversationslaspinas`
--
ALTER TABLE `conversationslaspinas`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `conversationsnovaliches`
--
ALTER TABLE `conversationsnovaliches`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `conversationspila`
--
ALTER TABLE `conversationspila`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historylaspinas`
--
ALTER TABLE `historylaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historynovaliches`
--
ALTER TABLE `historynovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historypila`
--
ALTER TABLE `historypila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optionslaspinas`
--
ALTER TABLE `optionslaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optionsnovaliches`
--
ALTER TABLE `optionsnovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optionspila`
--
ALTER TABLE `optionspila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `postslaspinas`
--
ALTER TABLE `postslaspinas`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `postsnovaliches`
--
ALTER TABLE `postsnovaliches`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `postspila`
--
ALTER TABLE `postspila`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionslaspinas`
--
ALTER TABLE `questionslaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionsnovaliches`
--
ALTER TABLE `questionsnovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionspila`
--
ALTER TABLE `questionspila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quizlaspinas`
--
ALTER TABLE `quizlaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiznovaliches`
--
ALTER TABLE `quiznovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizpila`
--
ALTER TABLE `quizpila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranklaspinas`
--
ALTER TABLE `ranklaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranknovaliches`
--
ALTER TABLE `ranknovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rankpila`
--
ALTER TABLE `rankpila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usersadmin`
--
ALTER TABLE `usersadmin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userschatlaspinas`
--
ALTER TABLE `userschatlaspinas`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userschatnovaliches`
--
ALTER TABLE `userschatnovaliches`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userschatpila`
--
ALTER TABLE `userschatpila`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userslaspinas`
--
ALTER TABLE `userslaspinas`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usersmarikina`
--
ALTER TABLE `usersmarikina`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usersnovaliches`
--
ALTER TABLE `usersnovaliches`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userspila`
--
ALTER TABLE `userspila`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answerlaspinas`
--
ALTER TABLE `user_answerlaspinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answernovaliches`
--
ALTER TABLE `user_answernovaliches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answerpila`
--
ALTER TABLE `user_answerpila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `videolaspinas`
--
ALTER TABLE `videolaspinas`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `videonovaliches`
--
ALTER TABLE `videonovaliches`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `videopila`
--
ALTER TABLE `videopila`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `answerlaspinas`
--
ALTER TABLE `answerlaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `answernovaliches`
--
ALTER TABLE `answernovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answerpila`
--
ALTER TABLE `answerpila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categorieslaspinas`
--
ALTER TABLE `categorieslaspinas`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categoriesnovaliches`
--
ALTER TABLE `categoriesnovaliches`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categoriespila`
--
ALTER TABLE `categoriespila`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `chatslaspinas`
--
ALTER TABLE `chatslaspinas`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chatsnovaliches`
--
ALTER TABLE `chatsnovaliches`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chatspila`
--
ALTER TABLE `chatspila`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactadmin`
--
ALTER TABLE `contactadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactlaspinas`
--
ALTER TABLE `contactlaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactnovaliches`
--
ALTER TABLE `contactnovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactpila`
--
ALTER TABLE `contactpila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conversationslaspinas`
--
ALTER TABLE `conversationslaspinas`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `conversationsnovaliches`
--
ALTER TABLE `conversationsnovaliches`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conversationspila`
--
ALTER TABLE `conversationspila`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `historylaspinas`
--
ALTER TABLE `historylaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historynovaliches`
--
ALTER TABLE `historynovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `historypila`
--
ALTER TABLE `historypila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=537;

--
-- AUTO_INCREMENT for table `optionslaspinas`
--
ALTER TABLE `optionslaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `optionsnovaliches`
--
ALTER TABLE `optionsnovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `optionspila`
--
ALTER TABLE `optionspila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `postslaspinas`
--
ALTER TABLE `postslaspinas`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `postsnovaliches`
--
ALTER TABLE `postsnovaliches`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `postspila`
--
ALTER TABLE `postspila`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `questionslaspinas`
--
ALTER TABLE `questionslaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questionsnovaliches`
--
ALTER TABLE `questionsnovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questionspila`
--
ALTER TABLE `questionspila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `quizlaspinas`
--
ALTER TABLE `quizlaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiznovaliches`
--
ALTER TABLE `quiznovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quizpila`
--
ALTER TABLE `quizpila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ranklaspinas`
--
ALTER TABLE `ranklaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranknovaliches`
--
ALTER TABLE `ranknovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rankpila`
--
ALTER TABLE `rankpila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usersadmin`
--
ALTER TABLE `usersadmin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userschatlaspinas`
--
ALTER TABLE `userschatlaspinas`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userschatnovaliches`
--
ALTER TABLE `userschatnovaliches`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userschatpila`
--
ALTER TABLE `userschatpila`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userslaspinas`
--
ALTER TABLE `userslaspinas`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usersmarikina`
--
ALTER TABLE `usersmarikina`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usersnovaliches`
--
ALTER TABLE `usersnovaliches`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userspila`
--
ALTER TABLE `userspila`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user_answerlaspinas`
--
ALTER TABLE `user_answerlaspinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_answernovaliches`
--
ALTER TABLE `user_answernovaliches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_answerpila`
--
ALTER TABLE `user_answerpila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `videolaspinas`
--
ALTER TABLE `videolaspinas`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videonovaliches`
--
ALTER TABLE `videonovaliches`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videopila`
--
ALTER TABLE `videopila`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
