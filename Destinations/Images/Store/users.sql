-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 08:44 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `password`, `address`, `mobile`, `email`) VALUES
('Dinithi Wick', 'dini', '1234', '23,Sirimal Road,Ratmalana', 716584231, 'dini@gmail.com'),
('Jiji Parrota', 'jiji', '2309', '42,Jiji Road,Jijiland', 716584174, 'jiji@yahoo.com'),
('Rico Ricardo', 'Ricks', '1911', '65,Food Road,Foodland', 718456841, 'rico@gmail.com'),
('Timmy Thompson', 'tims', '1507', '56,Food Road,Foodland', 716598741, 'dudu@gmail.com'),
('Hiranya Pana', 'hira', '1609', '16,Dell Road,Boralasgamuwa', 716598445, 'hira@gmail.com'),
('Yoo Seung Ho', 'Yoo', '9874', '34,Annyo Road,South Korea', 713695482, 'yoo@yahoo.com'),
('Dilini Pana', 'dprulz', '2305', '23,The Road,Malwana', 725438124, 'dili@yahoo.com'),
('Dudu Fernz', 'Dindi', '565656', '16,Dell Road,Boralasgamuwa', 716598741, 'dudu@gmail.com'),
('Dudu Fernz', 'Dindi', '42424', '56,Food Road,Foodland', 716598741, 'dudu@gmail.com'),
('Dudu Fernz', 'hira', '564', '23,Dinz Road,Ratmalana', 716584775, 'diniwick124@gmail.com'),
('Jinana Nana', 'jinna', '2654', '23,Nana Road,Dehiwala', 756584554, 'gihiihi@hihihih.com'),
('Diiii', 'hfhfhfh', '64646', '23,hdhfhd,jfjfj', 125555555, 'hdhdh@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
