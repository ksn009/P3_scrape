-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 8 月 29 日 14:45
-- サーバのバージョン： 5.6.43
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sellerregistration`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `registration`
--

CREATE TABLE `registration` (
  `seller_id` int(20) NOT NULL,
  `seller_name` varchar(200) NOT NULL,
  `seller_email` varchar(200) NOT NULL,
  `contact` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `legal_name` varchar(255) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `bank_account_no` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `signature_seal` varchar(200) NOT NULL,
  `signature_without_seal` varchar(200) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `gstin` varchar(200) NOT NULL,
  `address_proof` varchar(200) NOT NULL,
  `market_place` varchar(200) NOT NULL,
  `other_market_place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `seller_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
