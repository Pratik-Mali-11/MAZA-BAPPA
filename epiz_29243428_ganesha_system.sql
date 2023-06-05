-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql101.epizy.com
-- Generation Time: Sep 15, 2021 at 11:55 AM
-- Server version: 5.6.21-69.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29243428_ganesha_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `link`) VALUES
(1, 'this is an edited announcement', 'https://keep.google.com/u/0/#NOTE/'),
(2, 'This is an announcement related to Covid.', 'http://localhost:81/Ganesh-Festival-System/Add-Announcement');

-- --------------------------------------------------------

--
-- Table structure for table `get_ammonium`
--

CREATE TABLE `get_ammonium` (
  `id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `murti_type` varchar(20) NOT NULL,
  `booking_type` varchar(50) NOT NULL,
  `murti_weight` varchar(30) NOT NULL,
  `division_name` varchar(30) NOT NULL,
  `center_name` varchar(100) NOT NULL,
  `registered_at` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_ammonium`
--

INSERT INTO `get_ammonium` (`id`, `user_id`, `name`, `mobile_no`, `email`, `murti_type`, `booking_type`, `murti_weight`, `division_name`, `center_name`, `registered_at`) VALUES
(1, '105004221', 'Gaurav Borse', 2147483647, 'gborse108@gmail.com', 'Shadu Mati Murti', 'Gharguti (Residential)', '3 to 5 Kg', 'Nashik East', 'Center 1', '2021-08-08 17:00:42'),
(2, '209055721', 'Suraj Ahire', 2147483647, 'suraj@gmail.com', 'Plaster Of Paris Mur', 'Sarvjanik (Socity/Mandal)', '7 to 10 Kg', 'Nashik Road', 'Center 3', ''),
(3, '309484521', 'Karan Koli', 2147483647, 'karan@gmail.com', 'Plaster Of Paris Mur', 'Gharguti (Residential)', '5 to 7 Kg', 'Panchvati', 'Center 5', '');

-- --------------------------------------------------------

--
-- Table structure for table `guideline_popups`
--

CREATE TABLE `guideline_popups` (
  `id` int(11) NOT NULL,
  `pagename` varchar(40) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guideline_popups`
--

INSERT INTO `guideline_popups` (`id`, `pagename`, `title`, `description`, `image`, `active`) VALUES
(0, 'Main Page', 'GUIDELINES-home page', 'Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.', '', 0),
(1, 'Ammonium Bicarbonate', 'GUIDELINES-ammonium', 'Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.', '', 0),
(2, 'Slot Booking', 'GUIDELINES-slot booking', 'Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.', '', 0),
(3, 'Ganesh Mandal Registration', 'GUIDELINES-ganesh Mandals', 'Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.', '', 0),
(4, 'Organization Registration', 'GUIDELINES-org registration', 'Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.\r\n\r\nLorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry\'s standard dummy text ever.', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `org_registration`
--

CREATE TABLE `org_registration` (
  `id` int(11) NOT NULL,
  `org_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `org_type` varchar(20) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `org_address` varchar(200) NOT NULL,
  `per_name` varchar(50) NOT NULL,
  `reg_certificate` varchar(100) NOT NULL,
  `total_member` int(20) NOT NULL,
  `registered_at` varchar(50) NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_registration`
--

INSERT INTO `org_registration` (`id`, `org_id`, `name`, `org_type`, `mobile_no`, `email`, `reg_date`, `reg_no`, `org_address`, `per_name`, `reg_certificate`, `total_member`, `registered_at`, `approved`) VALUES
(1, '105490021', 'Dream Designers', 'Other', 2147483647, 'dream@gmail.com', '2021-08-01', 'Impact Solutions', 'Impact Solutions', 'Gaurav Borse', '054900-my-invoice-(3).pdf', 12, '2021-08-08 17:49:00', 1),
(2, '205505221', 'Impact Solutions', 'Club', 2147483647, 'gborse108@gmail.com', '2021-08-02', 'HA87633442', 'Nashik', 'Gaurav Borse', '055052-my-invoice.pdf', 55, '2021-08-08 17:50:52', 0),
(3, '308300121', 'Unicorn Design World', 'Association', 2147483647, 'amitpatil@gmail.com', '2021-08-02', 'NH7633356', 'Malegoan', 'Amit Patel', '083001-my-invoice-(1).pdf', 22, '2021-08-08 20:30:01', 1),
(4, '409095921', 'Suraj Farma', 'Other', 2147483647, 'suraj@gmail.com', '2021-08-02', 'GA678822233', 'Pune', 'Suraj Ahire', '090959-my-invoice.pdf', 33, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slot_booking`
--

CREATE TABLE `slot_booking` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `murti_type` varchar(20) NOT NULL,
  `division_name` varchar(20) NOT NULL,
  `pond_name` varchar(50) NOT NULL,
  `book_date` varchar(30) NOT NULL,
  `book_time` varchar(30) NOT NULL,
  `booked_at` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot_booking`
--

INSERT INTO `slot_booking` (`id`, `user_id`, `name`, `mobile_no`, `email`, `murti_type`, `division_name`, `pond_name`, `book_date`, `book_time`, `booked_at`) VALUES
(1, '104563021', 'Durgesh Jadhav', 2147483647, 'durgesh@gmail.com', 'Shadu Mati Murti', 'Nashik East', 'Artificial-Five', '27rd August 2021', '8:31 AM to 9:00 AM', '2021-08-08 16:56:30'),
(2, '207514621', 'Gaurav Borse', 2147483647, 'gborse108@gmail.com', 'Shadu Mati Murti', 'Nashik Road', 'Natural-Two', '27rd August 2021', '8:31 AM to 9:00 AM', '2021-08-08 19:51:46'),
(3, '307531621', 'Shaurya Shete', 2147483647, 'shau@gmail.com', 'Plaster Of Paris Mur', 'Panchvati', 'Artificial-Six', '23rd August 2021', '10:01 AM to 10:30 AM', '2021-08-08 19:53:16'),
(4, '409035821', 'Suraj Ahire', 2147483647, 'suraj@gmail.com', 'Shadu Mati Murti', 'Nashik West', 'Natural-Five', '26rd August 2021', '8:31 AM to 9:00 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `tank_on_wheel`
--

CREATE TABLE `tank_on_wheel` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `society_name` varchar(50) NOT NULL,
  `society_addr` varchar(500) NOT NULL,
  `secretary_name` varchar(50) NOT NULL,
  `secretary_email` varchar(50) NOT NULL,
  `sec_mobile_no` int(13) NOT NULL,
  `division_name` varchar(30) NOT NULL,
  `book_date` varchar(50) NOT NULL,
  `book_time` varchar(50) NOT NULL,
  `booked_at` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tank_on_wheel`
--

INSERT INTO `tank_on_wheel` (`id`, `user_id`, `society_name`, `society_addr`, `secretary_name`, `secretary_email`, `sec_mobile_no`, `division_name`, `book_date`, `book_time`, `booked_at`) VALUES
(1, '106252921', 'Uma Apartments', 'Mauli Lawns Kamathwade Nashik', 'Gaurav Borse', 'gborse108@gmail.com', 2147483647, 'Nashik East', '27rd August 2021', '8:00 AM to 8:30 AM', '2021-08-08 18:25:29'),
(2, '206302121', 'Drushti Hights', 'Kalika Park Untwadi Cidco Nashik', 'Shaurya Shete', 'shau@gmail.com', 2147483647, 'New Nashik', '23rd August 2021', '8:00 AM to 8:30 AM', '2021-08-08 18:30:21'),
(3, '306554121', 'Gokuldham Complex', 'Khade Nagar, Nashik Road, Nashik', 'Karam Koli', 'karan@gmail.com', 2147483647, 'Nashik Road', '28rd August 2021', '9:01 AM to 9:30 AM', '2021-08-08 18:55:41'),
(4, '407172521', 'Shubham Park', 'Uttam Nagar, Cidco, Nashik', 'Kunal Patil', 'kunal@gmail.com', 1234567891, 'New Nashik', '23rd August 2021', '9:31 AM to 10:00 AM', '2021-08-08 19:17:25'),
(5, '507323821', 'Shyam Park', 'Pawan Nagar, Cidco, Nashik', 'Jayesh Patil', 'jayesh@gmail.com', 2147483647, 'Nashik Road', '26rd August 2021', '9:01 AM to 9:30 AM', '2021-08-08 19:32:38'),
(6, '609051321', 'Raj Complex', 'Savata Nagar, Cidco, Nashik', 'Suraj Ahire', 'suraj@gmail.com', 1234567891, 'Nashik West', '26rd August 2021', '9:01 AM to 9:30 AM', ''),
(7, '710033021', 'Apurva Apartments', 'Mauli Lawns, Kamatwada, Nashik', 'Sandip Janeroa', 'sandeep@gmail.com', 2147483647, 'Nashik West', '27rd August 2021', '9:01 AM to 9:30 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `active` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `active`, `created_at`) VALUES
(1, 'Gaurav Borse', 'gborse108@gmail.com', 'root', 'admin', 'Publish', '2021-01-01'),
(2, 'Admin', 'admin@gmail.com', 'admin', 'admin', 'Publish', '2021-01-11'),
(3, 'Division', 'division@gmail.com', 'admin', 'division', 'Publish', '2021-07-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_ammonium`
--
ALTER TABLE `get_ammonium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guideline_popups`
--
ALTER TABLE `guideline_popups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_registration`
--
ALTER TABLE `org_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_booking`
--
ALTER TABLE `slot_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tank_on_wheel`
--
ALTER TABLE `tank_on_wheel`
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
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `get_ammonium`
--
ALTER TABLE `get_ammonium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guideline_popups`
--
ALTER TABLE `guideline_popups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `org_registration`
--
ALTER TABLE `org_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slot_booking`
--
ALTER TABLE `slot_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tank_on_wheel`
--
ALTER TABLE `tank_on_wheel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
