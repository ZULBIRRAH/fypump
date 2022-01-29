-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 06:48 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ump`
--

-- --------------------------------------------------------

--
-- Table structure for table `manageuser`
--

CREATE TABLE 'manageuser'(
   `id` int(11) NOT NULL;
    `name` varchar(50) NOT NULL;
    `password` varchar(50) NOT NULL;
    `userRole` varchar(50) NOT NULL;
    `phoneNum` varchar(10) NOT NULL;
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `manageuser`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `manageuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;