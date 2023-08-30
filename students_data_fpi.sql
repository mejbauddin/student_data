-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2023 at 07:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_data_fpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `roll` int(100) NOT NULL,
  `regno` int(100) NOT NULL,
  `users_name` varchar(100) NOT NULL,
  `users_pass` varchar(100) NOT NULL,
  `dep` varchar(200) NOT NULL,
  `dis` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `roll`, `regno`, `users_name`, `users_pass`, `dep`, `dis`, `img`) VALUES
(212, 332, 2342, 'new try', '@pass', 'csts', 'sdfsdfw', 'majba.jpg'),
(12244, 440044, 44455, 'Mejbah ', '@pass', 'wcs2t', 'sdfswdf', 'windows-11-leak.jpg'),
(12345, 445228, 1502060569, 'Mejbah Uddin', '', 'Computer', '6th semester, result : 4.00', '1.jpg'),
(23456, 445229, 1502060569, 'Hassan sheikh', '', 'Electrical', 'Reg.no : 2222222222, 6th semester, result : 4.00', '2.jpg'),
(34567, 123, 123, 'admin', 'admin', '', '', '3.jpg'),
(45678, 447445, 1502061609, 'Mirza Topu', '@pass', 'PT', 'Result : 3.73', '2022-11-26-144028.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
