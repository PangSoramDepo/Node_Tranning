-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 12:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pherum_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(201, '222222jpg.jpg', 'Finance is a term for matters regarding the management, creation, and study of money and investments.[1] Specifically, it deals with the questions of how and why an individual, company or government acquires the money needed – called capital in the company context – and how they spend or invest that money'),
(202, 'Xr.webp', ''),
(203, '6.png', ''),
(204, 'download.jpg', ''),
(205, '6787.jpg', ''),
(206, '`pherum.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `Account` varchar(200) NOT NULL,
  `Customer` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`Account`, `Customer`, `Amount`, `Date`, `des`, `type`) VALUES
('2', 'pherum chhoeurn', 'Battambang', 'jkj', '2020-11-03', 'Bătdâmbâng'),
('333', 'jjjj', 'Batdambang', 'gggg', '2020-11-19', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('333', 'Toch Bonan', 'Battambang', 'q11', '2020-11-18', 'Bătdâmbâng'),
('1', 'Pherum', '1000', 'interest', '2020-11-26', 'khmer'),
('1', 'Pherum', '1000', 'interest', '2020-11-26', 'khmer'),
('2', 'Bonan', '1000', 'sell', '2020-11-04', '$'),
('2', 'Bonan', '1000', 'sell', '2020-11-04', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('3', 'Pheak', '8000', 'sell', '2020-11-03', '$'),
('1', 'pherum chhoeurn', 'Battambang', 'qqqqqqqqqq', '2020-11-05', 'Bătdâmbâng'),
('001200', 'bonan', '100', 'karbrak', '2020-11-29', '$'),
('001200', 'bonan', '100', 'karbrak', '2020-11-29', '$'),
('1', 'pherum chhoeurn', 'Battambang', 'hhhhhhhhhhhhhk', '2020-11-24', 'Bătdâmbâng'),
('1', 'pherum chhoeurn', 'Battambang', 'hhhhhhhhhhhhhk', '2020-11-24', 'Bătdâmbâng');

-- --------------------------------------------------------

--
-- Table structure for table `komreing_db`
--

CREATE TABLE `komreing_db` (
  `Id` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `addrr` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `rigions` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komreing_db`
--

INSERT INTO `komreing_db` (`Id`, `Name`, `addr`, `addrr`, `village`, `rigions`, `code`, `phone`) VALUES
('1', 'ភិរម្យ', 'កំពង់ចាម', 'កំពង់ចាម', 'តាសារឿន', 'កំរៀង', '0008', '66666'),
('333', 'ភិរម្យ', 'កំពង់ចាម', 'sdgarg', 'តាសារឿន', 'កំរៀង', '0008', '00000000000000000000'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('2', 'ភិរម្យ', 'កំពង់ចាម', 'បាត់ដំបង', '2020-11-18', 'កំរៀង', '0008', '66666'),
('1', 'ភិរម្យ', 'កំពង់ចាម', 'ឡាន', '2020-11-19', 'កំរៀង', '60', '0979700520');

-- --------------------------------------------------------

--
-- Table structure for table `newcustomer_db`
--

CREATE TABLE `newcustomer_db` (
  `Name` varchar(200) NOT NULL,
  `Amounts` int(200) NOT NULL,
  `InterestRate` int(200) NOT NULL,
  `DateStart` date NOT NULL,
  `DateEnd` date NOT NULL,
  `TypePay` varchar(200) NOT NULL,
  `payallmounth` int(200) NOT NULL,
  `paymounth` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newcustomer_db`
--

INSERT INTO `newcustomer_db` (`Name`, `Amounts`, `InterestRate`, `DateStart`, `DateEnd`, `TypePay`, `payallmounth`, `paymounth`) VALUES
('-6', 1000, 5, '2020-11-18', '2021-01-18', 'loan', 700, -300),
('4', 1001, 6, '2020-11-18', '2021-03-18', 'loan', 1241, 240),
('4', 1001, 6, '2020-11-18', '2021-03-18', 'loan', 1241, 240),
('4', 1001, 6, '2020-11-18', '2021-03-18', 'loan', 1241, 240),
('-6', 1000, 5, '2020-11-18', '2021-01-18', 'loan', 700, -300),
('-6', 1000, 5, '2020-11-18', '2021-01-18', 'loan', 700, -300),
('5', 1000, 4, '2020-11-18', '2021-02-18', 'loan', 1200, 200),
('2', 1000, 6, '2020-11-18', '2021-01-18', 'loan', 1120, 60),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('1', 10000, 2, '2020-11-18', '2020-12-18', 'loan', 10200, 200),
('3', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 1120, 40),
('3', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 1120, 40),
('3', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 1120, 40),
('1', 10000, 4, '2020-11-18', '2020-12-18', 'loan', 10400, 400),
('1', 10000, 4, '2020-11-18', '2020-12-18', 'loan', 10400, 400),
('1', 10000, 4, '2020-11-18', '2020-12-18', 'loan', 10400, 400),
('1', 1000, 3, '2020-11-18', '2021-01-18', 'loan', 1030, 30),
('3', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 1120, 40),
('6', 1001, 5, '2020-11-18', '2020-11-18', 'loan', 1301, 50),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('-6', 1000, 4, '2020-11-18', '2020-12-18', 'loan', 760, 40),
('5', 1000, 4, '2020-11-19', '2020-11-19', 'loan', 1200, 40),
('8', 1000, 6, '2020-11-20', '2020-11-20', 'loan', 1480, 60);

-- --------------------------------------------------------

--
-- Table structure for table `register_customer`
--

CREATE TABLE `register_customer` (
  `Id` varchar(200) DEFAULT NULL,
  `Name` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `addrr` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `rigions` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_customer`
--

INSERT INTO `register_customer` (`Id`, `Name`, `addr`, `addrr`, `village`, `rigions`, `code`, `phone`, `photo`) VALUES
('2', 'Pherum', 'Battambang', 'Phone', '2020-11-30', 'Bătdâmbâng', '300', '0979700520', '5dd80deffd9db20a176152d8.jpg'),
('2', 'pherum chhoeurn', 'Battambang', 'yyy', '2020-12-07', 'Bătdâmbâng', '2222', '0979700520', '0313c2209dbe1a89395f295f08e10b3b (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sompov_db`
--

CREATE TABLE `sompov_db` (
  `Id` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `addrr` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `rigions` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sompov_db`
--

INSERT INTO `sompov_db` (`Id`, `Name`, `addr`, `addrr`, `village`, `rigions`, `code`, `phone`) VALUES
('1', 'ភិរម្យ', 'បាត់ដំបង', 'ឡាន', '១០​១០២០២០', 'កំរៀង', '0008', '0979700520'),
('333', 'gg', 'បាត់ដំបង', 'បាត់ដំបង', '2020-11-18', 'កកក', '0008', '09999999');

-- --------------------------------------------------------

--
-- Table structure for table `table_name`
--

CREATE TABLE `table_name` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_name`
--

INSERT INTO `table_name` (`name`, `email`, `password`, `role`) VALUES
('pherum', 'pherum@yahoo.com', '12345', 'admin'),
('sivsina', 'sina@yahoo.com', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_customer`
--
ALTER TABLE `register_customer`
  ADD KEY `Id` (`Id`),
  ADD KEY `Id_2` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
