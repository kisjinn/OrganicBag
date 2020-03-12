-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2019 at 12:33 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organicbag`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_agent`
--

CREATE TABLE `delivery_agent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `pan` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_agent`
--

INSERT INTO `delivery_agent` (`id`, `name`, `mobile`, `address`, `pan`, `aadhar`, `type`) VALUES
(7, 'Paresh Chandrashekhar Sawarkar', '9325899063', 'plot 10 ashadeep society shambhu nagar koradi road near water tank mankapur s.o. Nagpur Maharashtra', 'AZTPC6789H', '4565 4565 6777', 'Customer'),
(8, 'Dinesh Chandewar', '8983172893', '123,SHAMBHU NAGAR,KORADI ROAD,MANKAPUR ,NAGPUR', 'AZTPC6789H', '1233 7686 7666', 'Customer'),
(9, 'Dinesh Chandewar', '8983172893', '123,SHAMBHU NAGAR,KORADI ROAD,MANKAPUR ,NAGPUR', 'AZTPC6789H', '1452 1452 1456', 'Customer'),
(10, 'Paresh Chandrashekhar Sawarkar', '9325899063', 'plot 10 ashadeep society shambhu nagar koradi road near water tank mankapur s.o. Nagpur Maharashtra', 'AZTPC8976H', '4564 6756 6787', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `price` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit`, `price`) VALUES
(1, 'Tomato', 'KG', '45'),
(2, 'Water Lemon', 'UNIT', '50'),
(3, 'MANGO', 'KG', '500'),
(4, 'LADY FINGER', 'KG', '35'),
(5, 'BANANA', 'DOZEN', '40'),
(7, 'APPLE', 'UNIT', '40'),
(8, 'GRAPES', 'KG', '180');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_agent`
--
ALTER TABLE `delivery_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_agent`
--
ALTER TABLE `delivery_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
