-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2021 at 12:08 PM
-- Server version: 8.0.26-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Moringa`
--

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

CREATE TABLE `me` (
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `me`
--

INSERT INTO `me` (`firstname`, `email`, `password`) VALUES
('David', 'david@gmail.com', 234455),
('davii', 'da@gmail.com', 12345),
('abdull', 'abdull@gmail.com', 123456),
('Gilbert', 'gilbert@gmail.com', 9876),
('kibet', 'kibet@gmail.com', 3469);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`username`, `email`, `telephone`, `description`, `image`) VALUES
('David', 'david@gmail.com', 728234794, 'This is my laptop', ''),
('kibet', 'kibet@gmail.com', 728234794, 'This is also my laptop', ''),
('Mercy', 'mercy@gmail.com', 736278367, 'Another item', ''),
('jfhghg', 'dhhs@gmail.com', 735222785, 'lhfvguisgfig', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int NOT NULL,
  `item` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `email`, `mobile`, `item`, `image`) VALUES
('Hp Charger', 'kibet@gmail.com', 725678546, 'A HP charger ', 'hp-charger.png'),
('Phone', 'david@gmail.com', 735675234, 'Phone', 'tecno.png'),
('Money', 'kkk@gmail.com', 735678256, '100 kenya shillings', 'money.png'),
('Dell Laptop', 'lapt@gmail.com', 734570634, 'This is another laptop', 'Dell.png'),
('Lenovo', 'len@gmail.com', 726345897, 'Leno laptop', 'lenovo.png'),
('USB', 'us@gmail.com', 726345765, 'This is a USB cable', 'usb.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
