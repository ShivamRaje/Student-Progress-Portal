-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'rayed', '123'),
(2, 'manda', '41');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `daa` varchar(10) NOT NULL,
  `os` varchar(10) NOT NULL,
  `bhr` varchar(10) NOT NULL,
  `mp` varchar(10) NOT NULL,
  `ptbr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll_no`, `name`, `email`, `mobile`, `daa`, `os`, `bhr`, `mp`, `ptbr`) VALUES
(38, '4205', 'Sahil', 'sahil@gmail.com', '2938272626', '20', '19', '18', '17', '16'),
(39, '4238', 'Samid', 'samid@gmail.com', '2938271536', '16', '17', '18', '19', '20'),
(40, '4253', 'Rayed', 'rayed@gmail.com', '7112621093', '20', '19', '18', '17', '16'),
(41, '4256', 'Harshal', 'harshal@gmail.com', '1092735463', '16', '17', '18', '19', '20'),
(42, '4264', 'Gaurav', 'gaurav@gmail.com', '1827364039', '20', '19', '18', '17', '16'),
(43, '4265', 'Akash', 'akash@gmail.com', '1020374635', '16', '17', '18', '19', '20'),
(44, '4267', 'Shivam', 'shivam@gmail.com', '2344334333', '20', '19', '18', '17', '16'),
(45, '4274', 'Swapnil', 'swapnil@gmail.com', '2345678976', '16', '17', '18', '19', '20'),
(46, '4241', 'Ganesh', 'ganesh@gmail.com', '2829304657', '20', '19', '18', '17', '16');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_rollno` int(50) NOT NULL,
  `s_year` varchar(50) NOT NULL,
  `s_branch` varchar(50) NOT NULL,
  `s_mobilno` bigint(20) NOT NULL,
  `s_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `s_name`, `s_rollno`, `s_year`, `s_branch`, `s_mobilno`, `s_city`) VALUES
(3, 'rayed', 4253, '2', 'cse', 9422051220, 'jalna'),
(50, 'samid', 4238, '2', 'cse', 213564321, 'jalna'),
(52, 'Shivam', 4267, '2022', 'CSE', 9172353463, 'Aurangabad');

-- --------------------------------------------------------

--
-- Table structure for table `user_mark`
--

CREATE TABLE `user_mark` (
  `s_name` varchar(50) NOT NULL,
  `s_rollno` int(20) NOT NULL,
  `daa` int(20) NOT NULL,
  `os` int(20) NOT NULL,
  `bhr` int(20) NOT NULL,
  `ptrp` int(20) NOT NULL,
  `dldmp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_mark`
--

INSERT INTO `user_mark` (`s_name`, `s_rollno`, `daa`, `os`, `bhr`, `ptrp`, `dldmp`) VALUES
('rayed', 4253, 20, 20, 20, 20, 20),
('samid', 4238, 20, 2, 12, 213, 12),
('Shivam', 4267, 20, 20, 20, 20, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
