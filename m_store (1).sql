-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 06:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `eqution`
--

CREATE TABLE `eqution` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ask` text NOT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eqution`
--

INSERT INTO `eqution` (`id`, `username`, `ask`, `answer`) VALUES
(23, 'BASEL AHMED', 'How Much Iphone Max 6', 'fctft'),
(24, 'Nabil Ali', 'what you have?\r\n ', 'we have alot '),
(25, 'BASEL AHMED', 'sjbbkjajanbj', 'xxaxaas'),
(26, 'BASEL AHMED', 'w', 'ddff'),
(27, 'Mazen Ahmed', 'How Much ?', 'dfdd'),
(28, 'BASEL AHMED', 'last eqution?\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items1`
--

CREATE TABLE `items1` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `descrip` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items1`
--

INSERT INTO `items1` (`id`, `Name`, `price`, `descrip`, `img`, `category`) VALUES
(6, 'Samsung Galaxy S21', 20000, 'This Phone Have  Alot  thing ', 'Samsung Galaxy S21+ Plus.jpg', 'Samsung'),
(7, 'SAMSUNG Galaxy S21 ', 500, 'Ultra 5G Factory Unlocked Android Cell Phone 128GB US Version Smartphone Pro-Grade Camera 8K Video 108MP High Res, Phantom Silver', 'SAMSUNG Galaxy S21 Ultra.jpg', 'Samsung'),
(8, 'Motorola One 5G Ace ', 1000, ' 2021 | 2-Day battery | Unlocked | Made for US by Motorola | 6/128GB | 48MP Camera | Hazy Silver', 'otorola One 5G Ace.jpg', 'Sone'),
(9, 'TCL 20 SE 6.82', 1500, 'Unlocked Cellphone, 4GB RAM + 128GB ROM, US Version Android 11 Smartphone with 48MP Rear AI Quad-Camera, 5000mAh Big Battery, Dual Speaker, OTG Reverse Charging, Octa-Core, Nuit Black', '61Bdvki2cqS._AC_SL1500_.jpg', 'Sone'),
(10, 'Blackview A80', 1600, '\r\nUnlocked Smartphones, Blackview A80, 4G Dual sim Unlocked Cell Phones, Bundle Android 10 OS 2GB+16GB ROM, 6.2\" HD+, Fingerprint Face Detection, 4200mAh', '71cy10--XmL._AC_SL1500_.jpg', 'Sone'),
(11, 'Samsung Galaxy A31 ', 1200, '\r\nSamsung Galaxy A31 A315G 128GB Dual SIM GSM Unlocked Android Smartphone (International Variant/US Compatible LTE) - Prism Crush Blue', '61A3UNuWO9L._AC_SL1500_.jpg', 'Samsung'),
(12, 'Apple iPhone 11 Pro Max', 1000, 'Apple iPhone 11 Pro Max, 512GB, Space Gray - Unlocked (Renewed Premium)', 'Apple iPhone 11 Pro 2Max.jpg', 'iphone'),
(13, 'Apple iPhone 12 Pro Max', 1200, 'Apple iPhone 12 Pro Max, 256GB, Pacific Blue - Unlocked (Renewed Premium)', 'Apple iPhone 12 Pro Max.jpg', 'iphone'),
(14, 'Apple iPhone 11 Pro,', 1200, 'Apple iPhone 11 Pro, 64GB, Gold - Unlocked (Renewed Premium)', 'Apple iPhone 11 Pro,.jpg', 'iphone');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`) VALUES
(1, 'BASEL AHMED', 'basel@ahmed.com', 'basel', '1234'),
(2, 'Nabil Ali', 'nabil@ali.com', 'Nabil', '1234'),
(3, 'Mazen Ahmed', 'Mazen@ahemed.com', 'Mazen', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eqution`
--
ALTER TABLE `eqution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items1`
--
ALTER TABLE `items1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eqution`
--
ALTER TABLE `eqution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `items1`
--
ALTER TABLE `items1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
