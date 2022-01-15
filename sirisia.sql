-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 07:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirisia`
--

-- --------------------------------------------------------

--
-- Table structure for table `educationdetails`
--

CREATE TABLE `educationdetails` (
  `User_ID` int(50) NOT NULL,
  `Full_Names` varchar(50) NOT NULL,
  `Primary_Name` varchar(50) NOT NULL,
  `Kcpe_Year` date NOT NULL,
  `Index_No` varchar(50) NOT NULL,
  `Kcpe_Grade` varchar(10) NOT NULL,
  `Secondary_Name` varchar(50) NOT NULL,
  `Kcse_Year` date NOT NULL,
  `Kcse_Index` varchar(10) NOT NULL,
  `Kcse_Grade` varchar(10) NOT NULL,
  `Institution_Name` varchar(50) NOT NULL,
  `Date_Of_Admission` date NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Module` varchar(50) NOT NULL,
  `Adm_No` varchar(50) NOT NULL,
  `Course_Duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educationdetails`
--

INSERT INTO `educationdetails` (`User_ID`, `Full_Names`, `Primary_Name`, `Kcpe_Year`, `Index_No`, `Kcpe_Grade`, `Secondary_Name`, `Kcse_Year`, `Kcse_Index`, `Kcse_Grade`, `Institution_Name`, `Date_Of_Admission`, `Department`, `Course`, `Module`, `Adm_No`, `Course_Duration`) VALUES
(9, 'PETER  NYONGESA MASOMBO', 'BUTONGE', '2010-11-24', '626201016', 'B-', 'SA NDAKARU', '2014-11-25', '626209017', 'C', 'SIRISIA TECHNICAL TRAINING INSTITUTE', '2019-01-04', 'BUSINESS', 'DIPLOMA IN INFORMATION COMMUNICATION AND TECHNOLOG', 'MOD I', 'DICT/5999/019', '3'),
(11, 'RASHID', 'KYS', '2021-09-21', '62620116', 'A', 'BUTONGE', '2021-09-22', '4556454', 'C', 'SIRISIA TECHNICAL TRAINING INSTITUTE', '2022-05-21', 'HOSPITALITY', 'ARTISAN IN HAIR DRESSING', 'MOD III', 'DICT/4654/019', '3'),
(12, 'PETER  NYONGESA MASOMBO', 'BUTONGE', '2010-11-23', '626201016', 'B-', 'SA NDAKARU', '2014-11-25', '626109017', 'C', 'SIRISIA TECHNICAL TRAINING INSTITUTE', '2021-09-06', 'BUSINESS', 'CERTIFICATE IN INFORMATION COMMUNICATION AND TECHN', 'MOD I', 'CICT/0024/021', '2');

-- --------------------------------------------------------

--
-- Table structure for table `parentsdetails`
--

CREATE TABLE `parentsdetails` (
  `User_ID` int(11) NOT NULL,
  `Student_Full_Name` varchar(50) NOT NULL,
  `Adm_No` varchar(50) NOT NULL,
  `Father_First_Name` varchar(50) NOT NULL,
  `Father_Middle_Name` varchar(50) NOT NULL,
  `Father_Last_Name` varchar(50) NOT NULL,
  `Father_ID_No` varchar(8) NOT NULL,
  `Father_Phone` varchar(10) NOT NULL,
  `Mother_First_Name` varchar(50) NOT NULL,
  `Mother_Middle_Name` varchar(50) NOT NULL,
  `Mother_Last_Name` varchar(50) NOT NULL,
  `Mother_ID_No` varchar(8) NOT NULL,
  `Mother_Phone` varchar(10) NOT NULL,
  `Guardian_First_Name` varchar(50) NOT NULL,
  `Guardian_Middle_Name` varchar(50) NOT NULL,
  `Guardian_Last_Name` varchar(50) NOT NULL,
  `Guardian_ID_No` varchar(8) NOT NULL,
  `Guardian_Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parentsdetails`
--

INSERT INTO `parentsdetails` (`User_ID`, `Student_Full_Name`, `Adm_No`, `Father_First_Name`, `Father_Middle_Name`, `Father_Last_Name`, `Father_ID_No`, `Father_Phone`, `Mother_First_Name`, `Mother_Middle_Name`, `Mother_Last_Name`, `Mother_ID_No`, `Mother_Phone`, `Guardian_First_Name`, `Guardian_Middle_Name`, `Guardian_Last_Name`, `Guardian_ID_No`, `Guardian_Phone`) VALUES
(9, 'PETER NYONGESA MASOMBO', 'DICT/5999/019', 'PATRICK', 'MASOMBO', 'KABUKOTINGO', '1289403', '0711799576', 'MARGARET', 'CHILILIA', 'MASOMBO', '1289344', '0799355501', 'DAVID', 'SIMIYU', 'BUTALA', '2635578', '0726857126'),
(10, 'LEMANTU LESERIAN', 'CFB/8726/021', 'MARDODO', 'LENJANOI', 'SIMION', '1289403', '078545622', 'JANE', 'LENJANOI', 'KAJOS', '1289344', '0785452265', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `ID_No` varchar(8) NOT NULL,
  `Phone_No` varchar(10) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Marital_Status` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Religion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`User_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `ID_No`, `Phone_No`, `Date_Of_Birth`, `Marital_Status`, `Gender`, `Religion`) VALUES
(34, 'Peter', 'Nyongesa', 'Masombo', '32673689', '0725399787', '1995-11-30', 'SINGLE', 'MALE', 'CHRISTIAN'),
(35, 'LEMANTU', 'LESERIAN', 'BRIAN', '33268658', '0700857910', '2021-10-21', 'SINGLE', 'MALE', 'CHRISTIAN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(3, 5413, 'PETER MASOMBO', '2030', '2021-09-14 08:58:24'),
(4, 717310895021, 'RASHIDJUMA', '3355', '2021-09-15 02:31:14'),
(5, 6693979863430, 'RASHIDJUMA', '1234', '2021-09-28 09:20:53'),
(6, 9223372036854775807, 'ADMIN', '2030', '2021-09-30 12:54:21'),
(7, 90853258, 'RASHIDJUMA', '2030', '2021-10-11 05:11:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educationdetails`
--
ALTER TABLE `educationdetails`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `parentsdetails`
--
ALTER TABLE `parentsdetails`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educationdetails`
--
ALTER TABLE `educationdetails`
  MODIFY `User_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parentsdetails`
--
ALTER TABLE `parentsdetails`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
