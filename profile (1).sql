-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 12:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `privilages`
--

CREATE TABLE `privilages` (
  `id` int(5) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilages`
--

INSERT INTO `privilages` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2',
  `image` varchar(255) NOT NULL DEFAULT 'image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `first_name`, `last_name`, `email`, `gender`, `city`, `country`, `password`, `role`, `image`) VALUES
(1, 'syed anwar', 'shah', 'email@email.com', 'male', 'karachi', 'Pakistan', 'shah', 1, 'image.jpg'),
(11, 'syed', 'anwar', 'shah@email.com', 'male', 'karachi', 'Pakistan', '1630937c3d00b4f4b153599d934699', 2, 'image.jpg'),
(12, 'shah', 'shah', 'new@newSAda', 'male', 'khi', 'Pakistan', '3da9d436c3733748327e214d8dc0df', 2, 'c1.PNG'),
(13, 'name', 'new', 'email1@email', 'male', 'city', 'USA', '1630937c3d00b4f4b153599d934699', 2, 'Capture.PNG'),
(14, 'shah', 'new', 'new@newSA', 'male', 'khi', 'Turkey', '703fc5f60f617f8647b30aec9ead86', 2, 'Capture.PNG'),
(15, 'check', 'user', 'check@check', 'male', 'khi', 'Pakistan', '1630937c3d00b4f4b153599d934699', 2, 'c1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `privilages`
--
ALTER TABLE `privilages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `privilages`
--
ALTER TABLE `privilages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
