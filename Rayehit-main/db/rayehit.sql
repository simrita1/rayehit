-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 07:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayehit`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `type` varchar(25) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `location`, `bed`, `bath`, `area`, `img`, `type`, `price`, `status`, `uid`) VALUES
(1, 'House for sell in Sorhakhutte', 'Sorhakhutte, Kathmandu', 2, 2, 5, './img/housewithpond.jpg', 'Apartment', 30000000, 'Sell', 0),
(2, 'Banasthali maa ghaderi bikri maa', 'Banasthali, Kathmandu', 4, 2, 4, './img/house2.jpg', '\nStudio', 45000000, 'Rent', 0),
(3, 'House for sell in Paknajol', 'Paknajol, Kathmandu', 8, 4, 8, './img/house4.jpg', 'Residental', 80000000, 'Sell', 0),
(7, 'House for rent sell in godawari', 'Godawari, Lalitpur', 4, 1, 4, './img/1649779778.jpg', 'Residental', 650000, 'sell', 2);

-- --------------------------------------------------------

--
-- Table structure for table `propertytype`
--

CREATE TABLE `propertytype` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertytype`
--

INSERT INTO `propertytype` (`id`, `type`) VALUES
(3, 'Residental'),
(4, 'Apartment'),
(5, 'Warehouse'),
(6, 'Studio');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `mobile`, `email`, `password`) VALUES
(1, 'Manish Pandey', '9840384766', 'maneeshpandey977@gmail.com', 'helloworld'),
(2, 'Simran Ghimire', '99999999', 'simran@gmail.com', 'simran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertytype`
--
ALTER TABLE `propertytype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `propertytype`
--
ALTER TABLE `propertytype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
