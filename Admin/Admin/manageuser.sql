-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 06:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp-ump`
--

-- --------------------------------------------------------

--
-- Table structure for table `manageuser`
--

CREATE TABLE `manageuser` (
  `ID` varchar(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `usertype` varchar(11) NOT NULL,
  `phoneNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageuser`
--

INSERT INTO `manageuser` (`ID`, `name`, `password`, `usertype`, `phoneNum`) VALUES
('CB19031', 'Mariam', 'cb19031', 'Student', 139232314),
('CD19065', 'Nissa', 'cd19065', 'Admin', 199149300),
('CR0001', 'Manaf', 'cr0001', 'Coordinator', 136372082),
('EV0001', 'Siti', 'ev0001', 'Evaluator', 175732254),
('SV0001', 'Afiza', 'sv0001', 'Supervisor', 129232314);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manageuser`
--
ALTER TABLE `manageuser`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
