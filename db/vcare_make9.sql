-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 05:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcare_make9`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `projectTitle` text DEFAULT NULL,
  `contactNo` text DEFAULT NULL,
  `whatsappNo` text DEFAULT NULL,
  `supportMail` text DEFAULT NULL,
  `branchOffice` text DEFAULT NULL,
  `headOffice` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `projectTitle`, `contactNo`, `whatsappNo`, `supportMail`, `branchOffice`, `headOffice`) VALUES
(1, 'Complaint', '+91 9999888865', '+91 9999888855', 'support@complaint.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `userType` varchar(50) DEFAULT NULL COMMENT 'superadmin, admin, user',
  `status` int(11) NOT NULL DEFAULT 0,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `image`, `dob`, `gender`, `username`, `password`, `address`, `userType`, `status`, `createdDate`) VALUES
(1, 'SuperAdmin', 'superadmin@gmail.com', '9999999990', NULL, NULL, 'Male', 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 'New Delhi', 'superadmin', 1, '2020-04-17 23:05:46'),
(2, 'Admin', 'admin@gmail.com', '7878787878', '1610539241images.jpg', '1998-09-09', 'Male', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Delhi', 'admin', 1, '2020-04-17 23:05:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
