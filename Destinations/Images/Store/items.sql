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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Harry Potter themed t-shirt', 'HP001', 'harryPotter.jpg', 20.00),
(2, 'Street style', 'SS001', 'european.jpg', 20.00),
(3, 'French clothing', 'FC001', 'frenchclothing.jpg', 25.00),
(4, 'Perankan gifts', 'PG001', 'peranakan-gifts-souvenirs.jpg', 15.00),
(5, 'Sabah Pearls', 'SP001', 'b21cdee7e23-sabah-pearls.jpg', 12.00),
(6, 'Souvenirs De France1', 'SD001', 'frenchsouv.jpg', 21.00),
(7, 'Guide to Rome', 'GR001', 'romebook.jpg', 17.00),
(8, '10 Things to Do in Newcastle, England', 'NE001', 'newcastle.jpg', 24.00),
(9, 'Learn French', 'LF001', 'Frenchbook.jpg', 24.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
