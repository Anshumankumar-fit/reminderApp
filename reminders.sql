-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 05:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `rid` int(155) NOT NULL,
  `date` text NOT NULL,
  `subject` varchar(155) NOT NULL,
  `desc` text NOT NULL,
  `email` varchar(155) NOT NULL,
  `number` varchar(155) NOT NULL,
  `smsnumber` varchar(155) NOT NULL,
  `next` varchar(155) NOT NULL,
  `username` varchar(155) NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`rid`, `date`, `subject`, `desc`, `email`, `number`, `smsnumber`, `next`, `username`, `enable`) VALUES
(1, 'rsg', 'sfgfs', 'sfgs', 'sgs', 'srg', 'srg', 'srg', 'srg', 0),
(7, '2023-10-21', 'sgfbb', 'hkbfvikwdfbdf', 'ta@dd.ccdfbdfb', 'fefdfb', 'efffdb', '7fb', 'tapa21fdb', 0),
(8, '2023-10-12', 's4', 'fgwgiwyf86qwef', 'ta@dd.cc', '44444555', 'rgsg', '7', 'tapa21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `rid` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
