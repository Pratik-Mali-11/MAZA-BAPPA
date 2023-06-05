-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2021 at 11:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `festival_form`
--

CREATE TABLE `festival_form` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `festival_name` varchar(100) NOT NULL,
  `board_name` varchar(100) NOT NULL,
  `public_b_addr` varchar(100) NOT NULL,
  `circle_no` varchar(100) NOT NULL,
  `tent_length` varchar(100) NOT NULL,
  `tent_width` varchar(100) NOT NULL,
  `p_of_tent` varchar(100) NOT NULL,
  `date_of_const` varchar(100) NOT NULL,
  `last_date_removal` varchar(100) NOT NULL,
  `place_of_arch` varchar(100) NOT NULL,
  `no_of_arches` varchar(100) NOT NULL,
  `arch_height` varchar(100) NOT NULL,
  `banner_no` varchar(100) NOT NULL,
  `pavilian_area` varchar(100) NOT NULL,
  `address_of_place` varchar(100) NOT NULL,
  `details_prev` varchar(100) NOT NULL,
  `details_permission` varchar(100) NOT NULL,
  `mno` varchar(100) NOT NULL,
  `xyz` varchar(100) NOT NULL,
  `abc` varchar(100) NOT NULL,
  `fav_language` varchar(100) NOT NULL,
  `nashik` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `fire` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL,
  `list_board_member` varchar(100) NOT NULL,
  `traffic` varchar(100) NOT NULL,
  `tent_map` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `festival_form`
--
ALTER TABLE `festival_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `festival_form`
--
ALTER TABLE `festival_form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
