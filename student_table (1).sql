-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `Student_No` int(11) NOT NULL,
  `Student_ID` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Middle_Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Contact_No` varchar(200) NOT NULL,
  `Email_Address` varchar(200) NOT NULL,
  `Birthday` varchar(200) NOT NULL,
  `Age` varchar(200) NOT NULL,
  `Religion` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`Student_No`, `Student_ID`, `Last_Name`, `First_Name`, `Middle_Name`, `Address`, `Gender`, `Contact_No`, `Email_Address`, `Birthday`, `Age`, `Religion`, `Username`, `Password`) VALUES
(1, 'CT16-0005', 'Roque', 'Joshua', 'Nobleza', 'Silang', 'Male', '09123456789', 'juswa@gmail.com', '2024-04-02', '25', 'Catholic', 'juswa', 'secret'),
(2, 'CT16-0005', 'Roque', 'Gerome', 'Nobleza', 'Silang', 'Male', '09123456789', 'gerome@gmail.com', '2024-04-02', '25', 'Catholic', 'juswaw', 'secret'),
(3, '1', '1', '1', '1', '1', 'Male', '1', '1@gmail.com', '2024-04-03', '1', '1', '1', '1'),
(4, '2', '2', '2', '2', '2', 'Male', '2', '2@gmail.com', '2024-04-03', '2', '2', '2', '2'),
(5, '3', '3', '3', '3', '3', 'Male', '3', '3@gmail.com', '2024-04-03', '3', '3', '3', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`Student_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `Student_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
